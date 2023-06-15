@extends('categories.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'une catégorie1</p>
        </header>
        <div class="card-content">
            <div class="content">
                @method('put')
                    <div class="field">
                        <form action="{{ route('CategoryLevel1s.update', $CategoryLevel1->id) }}" method="POST">

                        <label class="label">Titre</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title', $CategoryLevel1->title) }}" placeholder="Titre de la categorie">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>    
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description de la categorie">{{ old('description', $CategoryLevel1->description) }}</textarea>
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
