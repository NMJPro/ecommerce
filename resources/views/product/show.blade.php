@extends('vitrine.layouts.product')
@section('title')
Vitrine LocalHost E-SHOP
@endsection
@section('content')
<div class="card">
<header class="card-header">
<p class="card-header-title">nom : {{ $product->name }}</p>
</header>
<div class="card-content">
<div class="content">
<h4>description:{{ $product->description }}</h4>
<br>
<h4>quantite est de:{{ $product->quantity }}</h4>
<br>
<h4>le prix est de:{{ $product->price }}</h4>
<br>
<h4>la remise est:{{ $product->remise }}</h4>
<br>
<h4>est de:{{ $product->sku }}</h4>
<br>
<h4>la garantie est de :{{ $product->garanty }}pour se produit</h4>
<h4>specifite du produit:{{ $product->specificity }}</h4>


</div>
</div>
</div>

@endsection
