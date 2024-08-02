@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de la Catégorie</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nom : {{ $category->name }}</h5>
            </div>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Retour à la Liste</a>
    </div>
@endsection