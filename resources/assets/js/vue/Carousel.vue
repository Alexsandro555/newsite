<template>
    <div ref="carousel" class="carousel-img">
        <v-layout row wrap>
            <div class="arrow">
                <img @click="prev" src="/images/slider-left-arrow.png"/>
            </div>
            <div class="gallery-img">
                <ul ref="list" class="images">
                    <li v-for="image in images">
                        <img v-if="image.file" :src="'/storage/'+image.file"/>
                        <img v-else src="/images/no-image.png"/>
                    </li>
                </ul>
            </div>
            <div class="arrow">
                <img @click="next" src="/images/slider-right-arrow.png"/>
            </div>
        </v-layout>
    </div>
</template>
<script>
    export default {
        props: {
            images: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                position: 0,
                width: 90,
                count: 3,
                len: 0
            }
        },
        mounted() {
            var listElems = this.$refs.carousel.querySelectorAll('li');
            this.len = listElems.length
        },
        methods: {
            prev() {
                this.position = Math.min(this.position + this.width * this.count, 0)
                this.$refs.list.style.marginLeft = this.position + 'px'
            },
            next() {
                this.position = Math.max(this.position - this.width * this.count, -this.width * (this.len - this.count));
                this.$refs.list.style.marginLeft = this.position + 'px'
            }
        }
     }
</script>
<style scoped>
    .carousel-img {
        position: relative;
        width: 293px;
        margin: 10px 20px;
    }
    .images img {
        display: block;
    }
    .gallery-img {
        width: 270px;
        overflow: hidden;
    }
    .gallery-img ul {
        height: 59px;
        width: 9999px;
        margin: 0;
        padding: 0;
        list-style: none;
        transition: margin-left 250ms;
        font-size: 0;
    }
    .gallery-img li {
        float:left;
    }
    .arrow {
        margin-top: 15px;
    }
</style>