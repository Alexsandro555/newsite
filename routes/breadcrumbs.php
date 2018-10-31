<?php
use Modules\Catalog\Entities\Product;
use Modules\Catalog\Entities\TypeProduct;
use Modules\Catalog\Entities\LineProduct;

Breadcrumbs::for('main', function ($trail) {
  $trail->add('Главная', route('main'));
});

Breadcrumbs::for('catalog.type-product', function($trail, $urlKeyTypeProduct) {
  $typeProduct = TypeProduct::where('url_key', $urlKeyTypeProduct)->first();
  $trail->parent('main');
  $trail->add($typeProduct->title, route('catalog.type-product',[$typeProduct->url_key]));
});

Breadcrumbs::for('catalog.line-product', function($trail, $urlKeyTypeProduct, $urlKeyLineProduct) {
  $lineProduct = LineProduct::with('type_product')->where('url_key', $urlKeyLineProduct)->first();
  $trail->parent('main');
  $trail->add($lineProduct->type_product->title, route('catalog.type-product',[$lineProduct->type_product->url_key]));
  $trail->add($lineProduct->title, route('catalog.line-product',[$lineProduct->type_product->url_key, $lineProduct->url_key]));
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