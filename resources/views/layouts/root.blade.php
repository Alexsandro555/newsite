<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('storage/favicon_leader.ico')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vuetify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('view.style')
    <title>@yield('title')</title>
</head>
<body>
    <div id="app" v-cloak>
        <v-app class="leader">
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
                                            <v-list-tile class="top-menu__item"><a href="/article/list">Статьи</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Оборудование</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Доставка и оплата</a></v-list-tile>
                                            <v-list-tile class="top-menu__item"><a href="#">Контакты</a></v-list-tile>
                                        </v-list>
                                    </v-flex>
                                    <v-flex xs4 text-xs-right>
                                        <auth-widget/>
                                    </v-flex>
                                </v-layout>
                            </div>
                            <div class="wrapper header-shadow">
                                <v-layout row wrap>
                                    <v-flex class="telephone top-20" xs5 text-xs-right>
                                        Работаем с <b>8</b> до <b>22</b> без выходных<br>
                                        <span class="telephone__number">+7(495)780 47 96</span><br>
                                        <img class="telephone__img" src="{{asset('images/telephone-img.png')}}" align="middle"/>
                                        <a class="telephone__link" href="#">заказать звонок</a>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center class="top-20">
                                        <a href="/"><img src="{{asset('images/logo.png')}}"/></a>
                                    </v-flex>
                                    <v-flex xs4 text-xs-left class="find top-20">
                                        <input placeholder="Поиск по сайту" class="find-input" type="text"><br><br>
                                        <v-layout row wrap>
                                            <v-flex xs2 text-xs-center>
                                                <a href="/cart#cart"><img src="{{asset('images/cart.png')}}" align="middle"/></a>
                                            </v-flex>
                                            <cart-widget/>
                                        </v-layout>
                                    </v-flex>
                                </v-layout>
                            </div>
                        </div>
                        <!--Конец верхнего меню-->
                    </header>
                    @yield('menu')
                    @yield('content')
                    <footer>
                        <div class="wrapper footers">
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
                                        <a href="#"><img src="{{asset('images/social-f.png')}}"/></a>
                                        <a href="#"><img src="{{asset('images/social-t.png')}}"/></a>
                                        <a href="#"><img src="{{asset('images/social-ok.png')}}"/></a>
                                        <a href="#"><img src="{{asset('images/social-v.png')}}"/></a>
                                        <a href="#"><img src="{{asset('images/social-y.png')}}"/></a>
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
                                        <img text-align-center src="{{asset('images/logo-footer.png')}}"/><br>
                                        <span class="telephone__number">+7(495)780 47 96</span><br>
                                        <img class="telephone__img" src="{{asset('images/telephone-img.png')}}" align="middle"/>
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
            <dialog-registration></dialog-registration>
            <dialog-login></dialog-login>
            <cart-modal></cart-modal>
        </v-app>
    </div>
    <script src="{{mix('/js/app.js')}}" type="application/javascript"></script>
</body>
</html>