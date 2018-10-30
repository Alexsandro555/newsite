@extends('layouts.root')

@section('content')
    <div class="content">
        <div class="wrapper">
            <v-content>
                <v-layout row wrap>
                    <v-flex xs12 class="text-xs-left">
                        <h1>{{$article->title}}</h1>
                        <p>
                            {!! $article->content !!}
                        </p>
                    </v-flex>
                </v-layout>
            </v-content>
        </div>
    </div>
@stop
