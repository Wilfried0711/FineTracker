@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de la Catégorie</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $category->name }}</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Modifer</a>

                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>

    </div>
@endsection