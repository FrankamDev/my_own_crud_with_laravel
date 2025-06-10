@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h2 class="mb-4 text-white">Liste d'etudiants</h2>
    <a href="{{ route('eleves.create') }}" class="btn btn-outline-info mb-3">Add Student</a>
    <table class="table table-bordered table-dark table-striped">
        <thead>

            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>frank</td>
                <td>frank@gmail.com</td>
                <td>999999999999999</td>
                <td>
                    <a href="" class="btn btn-outline-warning">Voir</a>
                    <a href="" class="btn btn-outline-warning">Editer</a>
                    <a href="" class="btn btn-outline-warning">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>

@endsection