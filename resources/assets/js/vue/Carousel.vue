<template>
    <div ref="carousel" class="carousel">
        <v-layout row wrap>
            <div class="arrow">
                <img @click="prev" src="/images/slider-left-arrow.png"/>
            </div>
            <div class="gallery">
                <ul ref="list" class="images">
                    <li> <img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
                    <li><img src="/images/slide-element.png"/></li>
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
        props: { },
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
    .carousel {
        position: relative;
        width: 293px;
        margin: 10px 20px;
    }
    .images img {
        display: block;
    }
    .gallery {
        width: 270px;
        overflow: hidden;
    }
    .gallery ul {
        height: 59px;
        width: 9999px;
        margin: 0;
        padding: 0;
        list-style: none;
        transition: margin-left 250ms;
        font-size: 0;
    }
    .gallery li {
       float:left;
    }
    .arrow {
        margin-top: 15px;
    }
</style>