@extends('layouts.root')

@section('content')
    <div class="content articles">
        <div class="wrapper">
            <v-content>
                <v-layout row wrap>
                    <v-flex xs12 class="text-xs-center bottom-20 top-20">
                        @foreach($articles as $article)
                            <v-card class="article--card">
                                <v-card-title class="text-xs-center">
                                    <span class="article--title">
                                        <a href="/article/{{$article->url_key}}">{{$article->title}}</a>
                                    </span>
                                </v-card-title>
                                <v-card-text class="text-xs-left">
                                    {{str_limit(strip_tags($article->content), $limit = 102, $end="...")}}
                                </v-card-text>
                                <v-card-actions>
                                    <a class="header-menu__auth-btn"  href="/article/{{$article->url_key}}">Подробнее</a>
                                </v-card-actions>
                            </v-card>
                            <p>
                                <br>
                            </p>
                        @endforeach
                    </v-flex>
                </v-layout>
            </v-content>
        </div>
    </div>
@stop
