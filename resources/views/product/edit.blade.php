@extends('vitrine.layouts.product')
@section('title')
Vitrine LocalHost E-SHOP
@endsection

@section('content')
<div class="card">
<header class="card-header">
<p class="card-header-title">Modification d'un d'un produit</p>
</header>
<div class="card-content">
<div class="content">
<form action="{{ route('products.update', $product->id) }}"method="POST">
@csrf
@method('put')

<div class="field">
<label class="label">nom</label>
<div class="control">
<input class="input @error('name') is-danger @enderror"
type="text" name="name" value="{{ old('name', $product->name) }}"
placeholder="Titre du product">
</div>
@error('name')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>

<div class="field">
<label class="label">Description</label>
<div class="control">
<textarea class="textarea" name="description"
placeholder="Description de la category">{{ old('description', $product->name) }}
</textarea>
</div>
@error('description')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">quantite</label>
<div class="control">
<input class="input @error('quantite') is-danger @enderror"
type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"
placeholder="quantite de produit">
</div>
@error('quantity')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">Prix</label>
<div class="control">
<input class="input @error('price') is-danger @enderror"
type="number" name="price" value="{{ old('price', $product->price) }}"
placeholder="prix du produit">
</div>
@error('price')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">Remise</label>
<div class="control">
<input class="input @error('remise') is-danger @enderror"
type="number" name="remise" value="{{ old('remise', $product->remise) }}"
placeholder="remise effectuer sur le prix de base">
</div>
@error('remise')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">garanty</label>
<div class="control">
<input class="input @error('garanty') is-danger @enderror"
type="text" name="garanty" value="{{ old('garanty', $product->garanty) }}"
placeholder="durre de garanty du produit">
</div>
@error('garanty')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>



<div class="field">
<label class="label">sku</label>
<div class="control">
<input class="input @error('sku') is-danger @enderror"
type="text" name="sku" value="{{ old('sku', $product->sku) }}"
placeholder="">
</div>
@error('sku')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">specificite du produit</label>
<div class="control">
<input class="input @error('specifity') is-danger @enderror"
type="text" name="specifity" value="{{ old('specifity', $product->specificity) }}"
placeholder="">
</div>
@error('specifity')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>

<div class="field">
<div class="control">
<button class="button is-link" type="submit">Envoyer</button>
</div>
</div>
</form>
</div>
</div>
</div>
@endsection