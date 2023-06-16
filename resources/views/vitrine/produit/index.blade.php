@extends('vitrines.layouts.app')

@section('title')
     Produits
@endsection
    @section('content')
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Produits</p>
            </header>
            @foreach($products as $product)
                <div class="card-content col-md-4">
                    <div class="produit-image">
                        <img src="{{$product->image}}" alt="{{$product->title}}">
                    </div>
                        <!--<tr @if($category1->deleted_at) class="has-background-grey-lighter" @endif>
                                <td><strong>{{ $category1->title }}</strong></td>
                                <td>
                                    @if($category1->deleted_at)
                                        <form action=" /*{{ route('category1s.restore',$category1->id) }}*/" method="post">
                                            @csrf
                                            @method('PUT')
                                                <button class="button is-primary" type="submit">Restaurer</button>
                                        </form>
                                    @else
                                        <a class="button is-primary" href="/*{{ route('category1s.show',$category1->id) }}*/">Voir</a>
                                    @endif
                                </td>
                                <td>
                                    @if($category1->deleted_at)
                                    @else
                                        <a class="button is-warning" href="/*{{ route('category1s.edit',$category1->id) }}*/">Modifier</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="/*{{ route($category1->deleted_at? 'category1s.force.destroy' :'category1s.destroy', $category1->id) }}*/" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

-->
                        <div class="produit-titre">
                            <p>{{$product->name}}</p>
                        </div>
                        <div class="produit-description">
                            <p>{{$product->decription}}</p>
                        </div>
                        <div class="produit-price">
                            <p>{{$product->price}}</p>
                        </div>
                        <div class="produit-garanty">
                            <p>{{$product->garanty}}</p>
                        </div>
                        <div class="produit-remise">
                            <p>{{$product->remise}}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <small>Posté le {{ $product->created_at->format("d/m/y à h:m") }}</small>
                        </div>
                    </div>
                @endforeach
                <!--<footer class="card-footer">
                    {{ $category1s->links() }}
                </footer>-->
            </div>
    @endsection