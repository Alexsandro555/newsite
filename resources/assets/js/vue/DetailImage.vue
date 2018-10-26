<template>
    <v-container fluid grid-list-md>
        <v-layout column align-center wrap>
            <div class="detail-image-wrap">
                <div class="detail-images-center">
                    <img v-if="curImage" :src="curImage"/>
                    <img v-else src="/images/no-image.png" width="200px"/>
                </div>
            </div>
            <div>
                &nbsp;
                <carousel style="width: 280px" v-if="items.length>0"
                          name="carousel4"
                          :pagination-enabled=false
                          :navigation-enabled=true
                          :per-page=3
                          :per-page-custom="[[480, 3]]">
                    <slide class="outer-carousel-slide" v-for="item in items" :key="item.id">
                        <div class="carousel-slide" @click="selectSlide(item.id)">
                            <img :src="'/storage/'+item.file"/>
                        </div>
                    </slide>
                </carousel>
            </div>
        </v-layout>
    </v-container>
</template>
<script>
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        props: {
            url: String,
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
        components: {
            Carousel,
            Slide
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

<style scoped>
    .detail__image {
        display: block;
    }
    .detail-image-wrap {
        display: block;
        width: 306px;
        height: 259px;
        background-color: white;
    }

    .detail-images-center {
        display: table-cell;
        width: 306px;
        height: 259px;
        vertical-align: middle;
    }

    .detail-images-center img {
        margin: 0px auto;
    }

    .outer-carousel-slide {
        line-height: 90px;
    }

    .carousel-slide {
        display: inline-block; /* центрировать..*/
        vertical-align: middle;  /* ..по вертикали */
        background-color: white;
        width: 86px;
        height: 93px;
    }

    .carousel-slide img {
        vertical-align: middle;
        line-height: 80px;
    }
</style>