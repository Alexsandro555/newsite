<template>
    <div class="detail__image--wrapper">
        <div class="detail__image">
            <div v-if="stock" class="detail__image-label">
                Акция!
            </div>
            <img v-if="curImage" :src="curImage"/>
            <img v-else src="/images/no-image.png"/>
            <div class="detail__image-carousel">
                <carousel :images="items"></carousel>
            </div>
        </div>
    </div>
</template>
<script>
    import Carousel from './Carousel.vue'

    export default {
        props: {
            url: String,
            stock: {
                Type: Boolean,
                default: false
            }
        },
        data: function() {
            return {
                elements:[],
                items:[],
                curImage: '',
            }
        },
        mounted() {
            axios.get(this.url).then(response =>
            {
                this.elements = response.data
                response.data.forEach(element => {
                    this.items.push({'id': element.id, 'file': element.config.files.small.filename});
                });
                this.curImage = this.items.length>0?'/storage/' + this.elements[0].config.files.main.filename:null
            }).catch(error => { console.log(error); });
        },
        comments: {
          Carousel
        },
        methods: {
            selectSlide: function (id, event) {
                this.elements.forEach(element => {
                    if(element.id === id) {
                        this.curImage = '/storage/'+element.config.files.main.filename;
                    }
                });
            }
        }
    }
</script>

