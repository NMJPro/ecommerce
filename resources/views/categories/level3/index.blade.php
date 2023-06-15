@extends('categories.template')
    @section('css')
        <style>
            .card-footer {
                justify-content: center;
                align-items: center;
                padding: 0.4em;
            }
            .is-info {
                margin: 0.3em;
            }
        </style>
    @endsection
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Categorie 3</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('CategoryLevel3s.index') }}" @unless($slug) selected @endunless>Toutes les catégories 2</option>
                        @foreach($CategoryLevel2s as $CategoryLevel2)
                            <option value="{{ route('CategoryLevel3s.CategoryLevel2', $CategoryLevel2->slug) }}" {{ $slug == $CategoryLevel2->slug ? 'selected' : '' }}>{{ $CategoryLevel2->title }}</option>
                        @endforeach
                </select>
            </div>
            <a class="button is-info" href="{{ route('CategoryLevel3s.create') }}">Créer une categorie3</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($CategoryLevel3s as $CategoryLevel3)
                            <tr @if($CategoryLevel3->deleted_at) class="has-background-grey-lighter" @endif>
                                <td><strong>{{ $CategoryLevel3->title }}</strong></td>
                                <td>
                                    @if($CategoryLevel3->deleted_at)
                                        <form action="{{ route('CategoryLevel3s.restore', $CategoryLevel3->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                                <button class="button is-primary" type="submit">Restaurer</button>
                                        </form>
                                    @else
                                        <a class="button is-primary" href="{{ route('CategoryLevel3s.show', $CategoryLevel3->id) }}">Voir</a>
                                    @endif
                                </td>
                                <td>
                                    @if($CategoryLevel3->deleted_at)
                                    @else
                                        <a class="button is-warning" href="{{ route('CategoryLevel3s.edit', $CategoryLevel3->id) }}">Modifier</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route($CategoryLevel3->deleted_at? 'CategoryLevel3s.force.destroy' :'CategoryLevel3s.destroy', $CategoryLevel3->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $CategoryLevel3s->links() }}
        </footer>
    </div>
@endsection
