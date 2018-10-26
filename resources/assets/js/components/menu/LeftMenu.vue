<template>
    <div class="menu-left">
        <div class="menu-left__header">
            Каталог продукции
            <img v-if="!toggle" @click="clickToggle" src="/images/menu-left-arrow.png"/>
            <img v-else @click="clickToggle" src="/images/menu-left-arrow-up.png"/>
        </div>
        <div ref="m" v-show="toggle">
            <div  class="menu-left__items" v-if="menu.length>0" v-for="menuItem in menu">
                <v-list class="menu-left__list" v-if="menuItem.type_products.length>0">
                    <v-menu offset-x open-on-hover v-for="itemMenu in menuItem.type_products" :key="itemMenu.id">
                        <v-list-tile slot="activator">
                            <div class="menu-left__list--text">
                                {{ itemMenu.title }}
                            </div>
                        </v-list-tile>
                        <v-list class="menu-left__list tom" v-if="itemMenu.line_products.length>0">
                            <v-list-tile :class="submenu.id%2?'menu-left__sub--light':'menu-left__sub--dark'" v-for="submenu in itemMenu.line_products" :key="submenu.id">
                                <div class="menu-left__sub__list--text">
                                    {{submenu.title}}
                                </div>
                            </v-list-tile>
                        </v-list>
                    </v-menu>
                </v-list>
            </div>
        </div>
        <div class="price-wrapper">
            <div class="price">
                <v-layout row wrap text-xs-center>
                    <v-flex xs5 class="price__img">
                        <img src="/images/img-price.png"/>
                    </v-flex>
                    <v-flex xs6 class="price__download">
                        Скачать<br>
                        <span class="price__download--next">прайс</span>
                    </v-flex>
                </v-layout>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'LeftMenu',
        props: {
            propToggle: {
                type: Boolean,
                default: true
            }
        },
        data: function() {
            return {
                menu: [],
                toggle: false
            }
        },
        mounted: function() {
            this.getMenu()
            this.toggle = this.propToggle
        },
        methods: {
            getMenu() {
                axios.get('/left-menu').then(response => response.data).then( response => {
                    this.menu = response
                }).catch(error => {})
            },
            goToPage(url) {
                window.location.href=url
            },
            clickToggle() {
                /*if(this.toggle) {

                }
                else {
                    this.$refs.m.classList.add('transition');
                    //this.$refs.m.classList.remove('transition');
                }*/
                this.toggle = !this.toggle
            }
        }
     }
</script>
<style>
    .transition {
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition:all 0.5s ease-in-out;
        -o-transition:all 0.5s ease-in-out;
        transition:all 0.5s ease-in-out;
    }
</style>