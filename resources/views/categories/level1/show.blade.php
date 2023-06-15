@extends('categories.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $CategoryLevel1->title }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>
                    <span style="font-size:1.5em; font-weight: bold;">Description:</span> <br><br>
                    {{ $CategoryLevel1->description }}
                </p>
            </div>
        </div>
    </div>
@endsection