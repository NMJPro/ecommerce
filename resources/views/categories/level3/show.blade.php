@extends('categories.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $CategoryLevel3->title }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p><span style="font-size:1.5em; font-weight: bold;">Categorie 2 d'origine: </span> <br><br>{{ $CategoryLevel2 }}</p>

                <p><span style="font-size:1.5em; font-weight: bold;">Description:</span> <br><br>
                    {{ $CategoryLevel3->description }}</p>
            </div>
        </div>
@endsection