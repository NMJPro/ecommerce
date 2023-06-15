@extends('categories.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'une categorie</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('CategoryLevel2s.store') }}" method="POST">
                @csrf
                    <div class="field">
                        <label class="label">Catégorie niveau 1</label>
                        <div class="select">
                            <select name="CategoryLevel1$CategoryLevel1_id">
                                @foreach($CategoryLevel1s as $CategoryLevel1)
                                    <option value="{{ $CategoryLevel1->id }}">{{ $CategoryLevel1->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Titre</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title') }}" placeholder="Titre de la categorie">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description de la categorie">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
