@extends('dashboard.layouts.app')
   
@section('content')
<div class="card">
<header class="card-header">
<p class="card-header-title">CREATION D'un produit</p>
</header>
<div class="card-content">
<div class="content">


<form method ="POST" action ="{{ route('products.store')}}" enctype ="multipart/form-data" >
@csrf
  <div class="field">
   <label class="label">nom</label>
   <div class="control">
   <input class="input @error('name') is-danger @enderror"
         type="text" name="name" value="{{ old('name') }}"placeholder="Titre du product">
</div>
@error('name')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>



<div class="field">
<label>Choisir des images</label>
<div class="control">


<input type ="file" name ="rootpath[]" multiple>

</div>
</div>

<div class="field">
<label class="label">Description</label>
<div class="control">
<textarea class="textarea" name="description" placeholder="Description de la category">{{ old('description') }}
</textarea>
</div>
@error('description')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">quantite</label>
<div class="control">
<input class="input @error('quantite') is-danger @enderror" type="number" name="quantity" value="{{ old('quantity') }}"placeholder="quantite de produit">
</div>
@error('quantity')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">Prix</label>
<div class="control">
<input class="input @error('price') is-danger @enderror" type="number" name="price" value="{{ old('price') }}" placeholder="prix du produit">
</div>
@error('price')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">Remise</label>
<div class="control">
<input class="input @error('remise') is-danger @enderror" type="number" name="remise" value="{{ old('remise') }}" placeholder="remise effectuer sur le prix de base">
</div>
@error('remise')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>


<div class="field">
<label class="label">garanty</label>
<div class="control">
<input class="input @error('garanty') is-danger @enderror" type="text" name="garanty" value="{{ old('garanty') }}" placeholder="durre de garanty du produit">
</div>
@error('garanty')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>



<div  class="field">
<label  class="label">sku</label>
<div class="control">
<input id='lios' class="input @error('sku') is-danger @enderror" type="text" name="sku" value="{{ old('sku') }}"placeholder="">
</div>
@error('sku')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>




<div class="field">
<label class="label">specificite du produit</label>
<div class="control">
<input class="input @error('specificity') is-danger @enderror"type="text" name="specificity" value="{{ old('specificity') }}"placeholder="">
</div>
@error('specificity')
<p class="help is-danger">{{ $message }}</p>
@enderror
</div>

<div id='lio' class="field">
<div class="control">
<button class="button is-link">Envoyer</button>

</div>
</div>

</div>
</div>
</div>


@section('css')
<style>
   
#lio
{
   font-size:2.1em;
}
</style>
@endsection



@endsection