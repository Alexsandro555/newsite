<?php
use Modules\Catalog\Entities\Product;

Breadcrumbs::for('main', function ($trail) {
  $trail->add('Главная', route('main'));
});

Breadcrumbs::for('catalog.detail', function($trail, $urlKeyTypeProduct, $urlKeyLineProduct, $urlKeyProduct) {
  $product = Product::with('type_product','line_product')->where('url_key',$urlKeyProduct)->first();
  $trail->parent('main');
  $trail->add($product->type_product->title, route('catalog.type-product', $product->type_product->url_key));
  if($product->line_product) {
    $trail->add($product->line_product->title, route('catalog.line-product', $product->line_product->url_key));
  }
  $trail->add($product->title, route('catalog.detail',[$product->type_product->url_key,$product->line_product?$product->line_product->url_key:'empty',$product->url_key]));
});