@extends('layouts.app') 

@section('content')
<div class="container">
    <h2>Modifier Élève</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" value="{{ old('nom', $eleve->nom) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $eleve->email) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" value="{{ old('telephone', $eleve->telephone) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('eleves.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
