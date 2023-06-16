@extends('vitrine.layouts.app')

@section('title')
    Vitrine LocalHost E-SHOP
@endsection

@section('js')
<!-- JavaScript Libraries -->
<script src="vitrine/dist/lib/owlcarousel/owl.carousel.min.js"></script>
@endsection

@section('header')
<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="vitrine/dist/img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                    <a href="{{ route('vitrine.shop')}}" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="vitrine/dist/img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item " style="height: 410px;">
            <img class="img-fluid" src="vitrine/dist/img/carousel-3.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">DNJE</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">The best center</h3>
                    <a href="{{ route('vitrine.shop')}}" class="btn btn-light py-2 px-3"></a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
@endsection

@section('content')
 <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $product->name }}</p>
        </header>
        <div class="card-content">
            <div class="product-image">
                <img src=" {{ $product->image }} " alt="{{ $product->name }}">
            </div>
            <div class="content">
                <p><span style="font-size:1.5em; font-weight: bold;">Description:</span> <br><br>
                    {{ $product->description }}</p>

                <p><span style="font-size:1.5em; font-weight: bold;">Prix:</span> <br><br>
                    {{ $product->price }}</p>

                <p><span style="font-size:1.5em; font-weight: bold;">Remise:</span> <br><br>
                    {{ $product->remise }}</p>

                <p><span style="font-size:1.5em; font-weight: bold;">Garantie:</span> <br><br>
                    {{ $product->garanty }}</p>
            </div>
            <hr>
                <i class="bi bi-heart"></i>
                <h5>Commentaires</h5><i class="bi bi-chat-dots"></i>
                @forelse ($product->comments as $comment)
                    <div class="card mb-2">
                        <div class="card-body">
                            {{ $comment->subject }}
                            <div class="d-flex justify-content-between align-items-center">
                                <small>Posté le {{ $comment->created_at->format("d/m/y") }}</small>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="alert alert-info">Aucun commentaire</div>
                @endforelse
                
                <form action="{{route('comments.store', $product)}}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" rows="5" placeholder="votre commentaire"></textarea>
                        @error('subject')
                        <div class="invalid-feedback">{{ $errors->first('subject') }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">envoyer</button>
                </form>
                <div class="rating">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
        </div>
@endsection
