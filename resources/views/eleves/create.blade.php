@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')
    <h3>Créer un élève</h3>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2>Ajouter un etudiant</h2>
                <a href="{{ route('eleves.index') }}" class="btn btn-outline-warning mt-2">RETOUR</a>
                <div class="card bg-dark text-white mt-4">
                    <div class="card-body border border-light rounded">
                        <form method="POST" action="{{ route('eleves.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Nom :</label>
                                <input type="text" id="name" name="name" class="form-control bg-dark text-white @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" class="form-control bg-dark text-white @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone">Tel :</label>
                                <input type="text" id="phone" name="phone" class="form-control bg-dark text-white @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-success">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection