@extends('layouts.root')

@section('content')
    <div class="breadcrumbs">
        <div class="wrapper">
            <v-flex xs12 text-xs-left>
                {{ Breadcrumbs::render() }}
            </v-flex>
        </div>
    </div>
    <div class="content">
        <div class="wrapper">
            <div class="abs-position-catalog">
                <left-menu :prop-toggle="false"></left-menu>
            </div>
            <v-flex xs12 text-xs-left class="top-20 bottom-20">
                <p class="headsite">
                    <span>{{$typeProduct->title}}</span><br>
                </p>
                <v-layout row wrap>
                    @foreach($products as $product)
                        <div class="product-wrapper">
                            <div class="product">
                                <div class="product-image-wrapper">
                                    <div class="product-image">
                                        @if($product->files->count()>0)
                                            @foreach($product->files as $fileRecord)
                                                @foreach($fileRecord->config as $files)
                                                    @foreach($files as $key => $file)
                                                        @if($key == 'medium')
                                                            <img src="/storage/{{$file['filename']}}"/>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                @break
                                            @endforeach
                                        @else
                                            <img src="{{asset('images/no-image-medium.png')}}"/>
                                        @endif
                                    </div>
                                </div>
                                <div class="product__title">
                                    <a href="/catalog/{{$product->type_product->title}}/{{$product->line_product?$product->line_product->title:'empty'}}/{{$product->url_key}}">
                                        {{str_limit($product->title, $limit = 27, $end="...")}}
                                    </a>
                                </div>
                                <v-layout row wrap>
                                    <v-flex xs8 text-xs-center>
                                        <span class="product-old-price">{{$product->price}} руб.</span><br>
                                        <span class="product-price-wrapper">
                                                        <span class="product-price">{{$product->price}}</span> руб.
                                                    </span>
                                    </v-flex>
                                    <v-flex xs4>
                                        <img src="{{asset('images/btn-sale.png')}}"/>
                                    </v-flex>
                                </v-layout>
                            </div>
                        </div>
                    @endforeach
                </v-layout>
            </v-flex>
        </div>
    </div>
@endsection