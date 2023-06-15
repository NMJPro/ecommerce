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
        select, .is-info {
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
            <p class="card-header-title">Categorie 2</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('CategoryLevel2s.index') }}" @unless($slug) selected @endunless>Toutes catégories 1</option>
                        @foreach($CategoryLevel1s as $CategoryLevel1)
                            <option value="{{ route('CategoryLevel2s.CategoryLevel1', $CategoryLevel1->slug) }}" {{ $slug == $CategoryLevel1->slug ? 'selected' : '' }}>{{ $CategoryLevel1->title }}</option>
                        @endforeach
                </select>
            </div>
            <a class="button is-info" href="{{ route('CategoryLevel2s.create') }}">Créer une categorie2</a>
            <a class="button is-info" href="{{ route('CategoryLevel3s.index') }}">Parcourir la categorie3</a>
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
                        @foreach($CategoryLevel2s as $CategoryLevel2)
                            <tr @if($CategoryLevel2->deleted_at) class="has-background-grey-lighter" @endif>
                                <td><strong>{{ $CategoryLevel2->title }}</strong></td>
                                <td>
                                    @if($CategoryLevel2->deleted_at)
                                        <form action="{{ route('CategoryLevel2s.restore', $CategoryLevel2->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                                <button class="button is-primary" type="submit">Restaurer</button>
                                        </form>
                                    @else
                                        <a class="button is-primary" href="{{ route('CategoryLevel2s.show', $CategoryLevel2->id) }}">Voir</a>
                                    @endif
                                </td>
                                <td>
                                    @if($CategoryLevel2->deleted_at)
                                    @else
                                        <a class="button is-warning" href="{{ route('CategoryLevel2s.edit', $CategoryLevel2->id) }}">Modifier</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route($CategoryLevel2->deleted_at? 'CategoryLevel2s.force.destroy' :'CategoryLevel2s.destroy', $CategoryLevel2->id) }}" method="post">
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
            {{ $CategoryLevel2s->links() }}
        </footer>
    </div>
@endsection

