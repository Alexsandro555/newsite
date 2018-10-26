@extends('layouts.root')

@section('content')
    <div class="content">
        <div class="wrapper detail">
            <v-layout row wrap>
                <v-flex xs3>
                    <left-menu></left-menu>
                </v-flex>
                <v-flex xs9>
                    <v-layout row wrap>
                        <v-flex xs5>
                            <div class="detail__image--wrapper">
                                <div class="detail__image">
                                    <div class="detail__image-label">
                                        Акция!
                                    </div>
                                    <img src="./images/detail-image.png"/>
                                    <div class="detail__image-carousel">
                                        <carousel></carousel>
                                    </div>
                                </div>
                            </div>
                        </v-flex>
                        <v-flex xs7 class="detail__info" text-xs-left>
                            <h1>Мотор редуктор NMRV MOTOVARIO (MOTOVARIO) Италия</h1><br>
                            Артикул, описание<br>
                            <img src="./images/heading.png"/><br>
                            <div class="detail__price">
                                <span class="detail__old-price">25 366.00 руб.</span><br>
                                <span class="detail__price--current">22 366.00</span> руб.<br>
                                <p>
                                    <a class="figure-button" href="#">
                                        Заказать
                                        <img src="./images/btn-sale-image.png"/>
                                    </a>
                                    <a class="button-ask-sale" href="#">Узнать скидку</a>
                                </p>
                                <p>
                                    Современная приводная техника пришла на смену устаревшим моделям,<br>
                                    которые уже отработали свое. Мотор-редукторы используются в кранах и <br>
                                    другой грузоподъемной технике, нашли свое применение в промышленных <br>
                                    вентиляторах, конвейерах разных типов, лифтах, пищевой промышленности.
                                </p>
                            </div>
                        </v-flex>
                    </v-layout>
                    <div class="detail__advanced-info">
                        <v-tabs slider-color="yellow" class="detail__characteristics">
                            <v-tab key="description">Опсание</v-tab>
                            <v-tab key="characteristics">Тех. характеристики</v-tab>
                            <v-tab key="advantages">Преимущества</v-tab>
                            <v-tab key="video">Видео</v-tab>
                            <v-tab-item key="description">
                                <div class="detail__characteristics-description">
                                    <h2>Описание</h2>
                                    <img src="./images/yellow-line.png"/><br>
                                </div>
                            </v-tab-item>
                            <v-tab-item key="characteristics">
                                <div class="detail__characteristics-characteristics">
                                    <h2>Характеристики</h2>
                                    <img src="./images/yellow-line.png"/><br>
                                    <dl>
                                        <dt>Мощьность</dt><dd>0.18 кВт</dd>
                                        <dt>Частота вращения</dt><dd>3000 об/мин</dd>
                                        <dt>Напряжение</dt><dd>229/300 В</dd>
                                        <dt>Ток статора</dt><dd>0.96/0.55 A</dd>
                                        <dt>КПП</dt><dd>62%</dd>
                                        <dt>Коэф. мощности</dt><dd>0,8</dd>
                                        <dt>Mmax/Mн</dt><dd>2.2</dd>
                                        <dt>Мп/Мн</dt><dd>2.2</dd>
                                        <dt>In/Iн</dt><dd>5.5</dd>
                                    </dl>

                                </div>
                            </v-tab-item>
                            <v-tab-item key="advantages">
                                <div class="detail__characteristics-advantages">

                                </div>
                            </v-tab-item>
                            <v-tab-item key="video">
                                <div class="detail__characteristics-video">

                                </div>
                            </v-tab-item>
                        </v-tabs>
                    </div>
                </v-flex>
            </v-layout>
        </div>
    </div>
    <div class="best-sale">
        <div class="wrapper">
            <v-flex xs12 text-xs-left class="bottom-20 top-20">
                <v-layout row wrap>
                    <v-flex xs9>
                        <p class="headsite_best-sale">
                            <span>Смотрите также</span><br>
                            популярные продукты
                        </p>
                    </v-flex>
                    <v-flex xs3 text-xs-right>
                        <a href="#" class="content-button">Смотреть каталог</a>
                    </v-flex>
                </v-layout>
                <v-layout row wrap>
                    <div class="product-wrapper">
                        <div class="product">
                            <div class="product-image-wrapper">
                                <div class="product-image">
                                    <img src="./images/product-image.png"/>
                                </div>
                            </div>
                            <div class="product__title">
                                <a href="#">Название электродвигателя</a>
                            </div>
                            <v-layout row wrap>
                                <v-flex xs8 text-xs-center>
                                    <span class="product-old-price">25 366.00 руб.</span><br>
                                    <span class="product-price-wrapper">
                                                        <span class="product-price">22 366.00</span> руб.
                                                    </span>
                                </v-flex>
                                <v-flex xs4>
                                    <img src="./images/btn-sale.png"/>
                                </v-flex>
                            </v-layout>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product">
                            <div class="product-image-wrapper">
                                <div class="product-image"></div>
                            </div>
                        </div>
                    </div>
                </v-layout>
            </v-flex>
        </div>
    </div>
@endsection