<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('storage/favicon_leader.ico')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заголовок</title>
</head>
<body>
<div id="app">
    <v-app>
        <v-container>
            <div class="menu-left">
                <div class="menu-left__header">
                    Каталог продукции
                    <img src="./images/menu-left-arrow.png"/>
                </div>
                <v-list class="menu-left__list">
                    <v-menu offset-x open-on-hover>
                        <v-list-tile slot="activator">
                            <div class="menu-left__list--text">
                                Общепромышленные электродвигатели
                            </div>
                        </v-list-tile>
                        <v-list class="menu-left__list tom">
                            <v-list-tile class="menu-left__sub--light">
                                <div class="menu-left__sub__list--text">
                                    Электродвигатели стандарта DIN второй уровень
                                </div>
                            </v-list-tile>
                            <v-list-tile class="menu-left__sub--dark">
                                <div class="menu-left__sub__list--text">
                                    Электродвигатели стандарта DIN второй уровень
                                </div>
                            </v-list-tile>
                            <v-list-tile class="menu-left__sub--light">
                                <div class="menu-left__sub__list--text">
                                    Электродвигатели стандарта DIN второй уровень
                                </div>
                            </v-list-tile>
                        </v-list>
                    </v-menu>
                    <v-list-tile>
                        <div class="menu-left__list--text">
                            Электродвигатели стандарта DIN
                        </div>
                    </v-list-tile>
                    <v-list-tile>
                        <div class="menu-left__list--text">
                            Однофазные электродвигатели
                        </div>
                    </v-list-tile>
                    <v-list-tile>
                        <div class="menu-left__list--text">
                            Крановые электродвигатели
                        </div>
                    </v-list-tile>
                    <v-list-tile>
                        <div class="menu-left__list--text">
                            Взрывозащищенные электродвигатели
                        </div>
                    </v-list-tile>
                </v-list>
                <div class="price-wrapper">
                    <div class="price">
                        <v-layout row wrap text-xs-center>
                            <v-flex xs5 class="price__img">
                                <img src="./images/img-price.png"/>
                            </v-flex>
                            <v-flex xs6 class="price__download">
                                Скачать<br>
                                <span class="price__download--next">прайс</span>
                            </v-flex>
                        </v-layout>
                    </div>
                </div>
            </div>
        </v-container>
    </v-app>
</div>
<script src="{{mix('/js/app.js')}}" type="application/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</body>
</html>