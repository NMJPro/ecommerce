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
            <p class="card-header-title">Categorie 1</p>
            <a class="button is-info" href="{{ route('CategoryLevel1.create') }}">Créer une categorie1</a>
            <a class="button is-info" href="{{ route('CategoryLevel2s.index') }}">Parcourir la categorie2</a>
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
                        @foreach($CategoryLevel1s as $CategoryLevel1)
                            <tr @if($CategoryLevel1->deleted_at) class="has-background-grey-lighter" @endif>
                                <td><strong>{{ $CategoryLevel1->title }}</strong></td>
                                <td>
                                    @if($CategoryLevel1->deleted_at)
                                        <form action="{{ route('CategoryLevel1s.restore',$CategoryLevel1->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                                <button class="button is-primary" type="submit">Restaurer</button>
                                        </form>
                                    @else
                                        <a class="button is-primary" href="{{ route('CategoryLevel1.show',$CategoryLevel1->id) }}">Voir</a>
                                    @endif
                                </td>
                                <td>
                                    @if($CategoryLevel1->deleted_at)
                                    @else
                                        <a class="button is-warning" href="{{ route('CategoryLevel1.edit',$CategoryLevel1->id) }}">Modifier</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route($CategoryLevel1->deleted_at? 'CategoryLevel1.force.destroy' :'CategoryLevel1.destroy', $CategoryLevel1->id) }}" method="post">
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
                {{ $CategoryLevel1s->links() }}
            </footer>
        </div>
@endsection
