<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="{{asset('storage/favicon_leader.ico')}}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <title>Заголовок</title>
    </head>
    <body>
    <div id="app">
        <v-app>
            <v-container pa-0 fluid grid-list-xs text-xs-center>
                <v-layout column wrap>
                    <header>
                        <!--Верхнее меню-->
                        <div class="header-menu hidden-sm-and-down">
                            <div class="wrapper header-menu--center">
                                <v-layout row wrap>
                                    <v-flex xs8 text-xs-left>
                                        <v-list class="top-menu">
                                            <v-list-tile class="top-menu__item"><a href="#">О компании</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Новости</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Оборудование</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Доставка и оплата</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Контакты</a></v-list-tile>
                                        </v-list>
                                    </v-flex>
                                    <v-flex xs4 text-xs-right>
                                        <a href="#" class="header-menu__auth-btn">Вход на сайт</a>
                                        <a href="#" class="header-menu__auth-btn">Регистрация</a>
                                    </v-flex>
                                </v-layout>
                            </div>
                            <div class="wrapper header-shadow">
                                <v-layout row wrap>
                                    <v-flex class="telephone top-20" xs5 text-xs-right>
                                        Работаем с <b>8</b> до <b>22</b> без выходных<br>
                                        <span class="telephone__number">+7(495)780 47 96</span><br>
                                        <img class="telephone__img" src="./images/telephone-img.png" align="middle"/>
                                        <a class="telephone__link" href="#">заказать звонок</a>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center class="top-20">
                                        <img src="./images/logo.png"/>
                                    </v-flex>
                                    <v-flex xs4 text-xs-left class="find top-20">
                                        <input placeholder="Поиск по сайту" class="find-input" type="text"><br><br>
                                        <v-layout row wrap>
                                            <v-flex xs2>
                                                <img src="./images/cart.png" align="middle"/>
                                            </v-flex>
                                            <v-flex xs6 text-align-left class="cart__info">
                                                <span class="cart__gold">2</span> товара на<br>
                                                <span class="cart__gold">1 100 000</span> руб.
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>
                                </v-layout>
                            </div>
                        </div>
                        <!--Конец верхнего меню-->
                    </header>
                    <div class="content">
                        <div class="wrapper">
                            <v-flex xs9 offset-xs3 text-xs-left class="bottom-20">
                                <v-layout row wrap>
                                    <v-flex xs9>
                                        <p class="headsite">
                                            <span>Наша продукция</span><br>
                                            кто мы и что предлагаем
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
                    <div class="best-sale">
                        <div class="wrapper">
                            <v-flex xs12 text-xs-left class="bottom-20 top-20">
                                <v-layout row wrap>
                                    <v-flex xs9>
                                        <p class="headsite_best-sale">
                                            <span>Лучшие продажи</span><br>
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
                    <div class="about">
                        <div class="wrapper about__content">
                            <v-layout row wrap>
                                <v-flex xs3>
                                    <p class="about__brands">
                                        Наши бренды
                                    </p>
                                    <p class="about__social">
                                        Мы в соцсетях
                                    </p>
                                    <a href="#">
                                        <img src="./images/about-social-f.png"/>
                                    </a>
                                    <a href="#">
                                        <img src="./images/about-social-t.png"/>
                                    </a>
                                    <a href="#">
                                        <img src="./images/about-social-ok.png"/>
                                    </a>
                                    <a href="#">
                                        <img src="./images/about-social-vk.png"/>
                                    </a>
                                    <a href="#">
                                        <img src="./images/about-social-y.png"/>
                                    </a>
                                </v-flex>
                                <v-flex xs6 text-xs-left>
                                    <p class="about__head">
                                        <span>О компании</span><br>
                                        особенности покупки в нашем магазине
                                    </p>
                                    <p>
                                        Мы понимаем, что нашим клиентам очень важно соблюдать сроки сдачи работ.<br>
                                        Поэтому отгрузка товара осуществляется в течение одного рабочего дня с <br>
                                        момента поступления оплаты.
                                    </p>
                                    <p>
                                        Узнать подробнее об условиях доставки Вы можете при оформлении заказа у<br>
                                        нашего специалиста по телефону <span class="about__telephone">+7 (495) 780 47 96</span><br>
                                        или сделать запрос по электронной почте
                                    </p>
                                    <v-list class="about__list">
                                        <v-list-tile>Оплата производится по безналичному расчету.</v-list-tile>
                                        <v-list-tile>Возможна оплата наличными при доставке на объект Заказчика.</v-list-tile>
                                    </v-list>
                                </v-flex>
                                <v-flex xs3 text-xs-right>
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
                                </v-flex>
                            </v-layout>
                        </div>
                    </div>
                    <div class="news">
                        <div class="wrapper news__content">
                            <v-layout row wrap>
                                <v-flex xs8 text-xs-left>
                                    <v-layout row wrap>
                                        <v-flex xs8>
                                            <p class="about__head">
                                                <span>Новости индустрии</span><br>
                                                и нашей компании
                                            </p>
                                        </v-flex>
                                        <v-flex xs3 text-xs-right>
                                            <a href="#" class="content-button">Все новости</a>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex xs3>
                                            <span class="news__number">8<span class="news__date">09.18</span></span><br>
                                            <a class="news__link" href="#">Успевайте купить</a><br>
                                            понимают совокупность
                                            технических средств и
                                            технологий, знаний и
                                            деятельности.
                                        </v-flex>
                                        <v-flex xs3>
                                            <span class="news__number">8<span class="news__date">09.18</span></span><br>
                                            <a class="news__link" href="#">Успевайте купить</a><br>
                                            понимают совокупность
                                            технических средств и
                                            технологий, знаний и
                                            деятельности.
                                        </v-flex>
                                        <v-flex xs3>
                                            <span class="news__number">8<span class="news__date">09.18</span></span><br>
                                            <a class="news__link" href="#">Успевайте купить</a><br>
                                            понимают совокупность
                                            технических средств и
                                            технологий, знаний и
                                            деятельности.
                                        </v-flex>
                                        <v-flex xs3>
                                            <span class="news__number">8<span class="news__date">09.18</span></span><br>
                                            <a class="news__link" href="#">Успевайте купить</a><br>
                                            понимают совокупность
                                            технических средств и
                                            технологий, знаний и
                                            деятельности.
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                                <v-flex xs4>
                                    <div class="news__big-image">
                                        <img src="./images/big-electric-motor.png"/>
                                    </div>
                                </v-flex>
                            </v-layout>
                        </div>
                    </div>
                    <footer>
                        <div class="wrapper footer">
                            <div>
                                <v-layout row wrap>
                                    <v-flex xs3>
                                        <v-layout row wrap>
                                            <v-flex xs6></v-flex>
                                            <v-flex class="footer__main-site" xs6 text-xs-right>
                                                <span>Посетить</span><br>
                                                оффициальный сайт
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>
                                    <v-flex xs2>
                                        <a href="#"><img src="./images/social-f.png"/></a>
                                        <a href="#"><img src="./images/social-t.png"/></a>
                                        <a href="#"><img src="./images/social-ok.png"/></a>
                                        <a href="#"><img src="./images/social-v.png"/></a>
                                        <a href="#"><img src="./images/social-y.png"/></a>
                                    </v-flex>
                                    <v-flex xs2>
                                        <v-list class="footer__list">
                                            <v-list-tile>Общепромышленные электродвигатели</v-list-tile>
                                            <v-list-tile>Электродвигатели стандарта DIN</v-list-tile>
                                            <v-list-tile>Однофазные электродвигатели</v-list-tile>
                                            <v-list-tile>Крановые электродвигатели</v-list-tile>
                                        </v-list>
                                    </v-flex>
                                    <v-flex xs2>
                                        <v-list class="footer__list">
                                            <v-list-tile>Взрывозащищенные электродвигатели АИМУ</v-list-tile>
                                            <v-list-tile>Рудничные электродвигатели АИМУР</v-list-tile>
                                            <v-list-tile>Взрывозащищенные и рудничные электродвигатели 2АИМУР</v-list-tile>
                                            <v-list-tile>С пониженной степенью защиты IP23</v-list-tile>
                                        </v-list>
                                    </v-flex>
                                    <v-flex xs3>
                                        <img text-align-center src="./images/logo-footer.png"/><br>
                                        <span class="telephone__number">+7(495)780 47 96</span><br>
                                        <img class="telephone__img" src="./images/telephone-img.png" align="middle"/>
                                        <a class="telephone__link" href="#">заказать звонок</a>
                                        <p>
                                            г. Москва, Большая <br>Семеновская д.15
                                        </p>
                                    </v-flex>
                                </v-layout>
                            </div>
                            <div>
                                <v-layout row wrap>
                                    <v-flex xs4 class="footer__copyright">
                                        Copyright 2018. Все права защищены
                                    </v-flex>
                                    <v-flex xs8 text-xs-right>
                                        <v-list class="top-menu">
                                            <v-list-tile class="top-menu__item"><a href="#">О компании</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Новости</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Оборудование</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Доставка и оплата</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Контакты</a></v-list-tile>
                                        </v-list>
                                    </v-flex>
                                </v-layout>
                            </div>
                        </div>
                    </footer>
                </v-layout>
            </v-container>
        </v-app>
    </div>
        <script src="{{mix('/js/app.js')}}" type="application/javascript"></script>
    </body>
</html>