@extends('dashboard.layouts.app')
@section('title')
Vitrine LocalHost E-SHOP
@endsection

@section('content')
@if(session()->has('info'))
<div class="notification is-success">
{{ session('info') }}
</div>
@endif
@section('content')
@section('content')
<p id="lio">TABLEAUX DES PRODUITS</p>
<a id='link' class="button is-info" href="{{ route('products.create') }}">Créer un produit</a>
</header>
<div class="card-content">
<div class="content">
<table class="table is-hoverable">
<thead>
<tr>
<th>#</th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>

</thead>
<tbody>
@foreach($products as $product)
<tr>
<td><strong>{{ $product->name}}</strong></td>
<td><a class="button is-primary" href="{{ route('products.show',$product->id) }}">Voir ce produit</a></td>
<td><a class="button is-warning" href="{{ route('products.edit',$product->id) }}">Modifier le produit</a></td>
<td>
<form action="{{route('products.destroy', $product->id) }}" method='Post'>
@csrf
@method('DELETE')

<button class="button is-danger" type="submit">Supprimer ce produit</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</div>
<footer class="card-footer">
{{ $products->links() }}
</footer>
</div>
@section('css')
<style>
.card-footer {
justify-content: center;
align-items: center;
padding: 0.4em;


}
#lio{
text-align:center;
color:black;
font-size:2.5em;
height: 100px;
width: 900px;
border: 4px solid black;
background-color:white;
margin-left:100px;
border-radius:30px;
}
#link
{
    text-align:center;
    border-radius:10px;
    margin-left:400px;
}
</style>
@endsection
@endsection

