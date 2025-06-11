@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')

<div class="container mt-4">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h2 class="mb-4 text-white">Liste d'etudiants</h2>
    <a href="{{ route('eleves.create') }}" class="btn btn-outline-info mb-3">Add Student</a>
    @session('success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Succès!</strong> {{ $value }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession

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
            @forelse ($eleves as $eleve)


            <tr>
                <td>{{$eleve->id}}</td>
                <td>{{$eleve->name}}</td>
                <td>{{$eleve->email}}</td>
                <td>{{$eleve->phone}}</td>
                <td class="d-flex">


                    <a href="{{ route('eleves.show', $eleve->id) }}" class="btn btn-outline-primary">Voir</a>

                    <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                    <form action="{{ route('eleves.destroy', $eleve->id) }}" method="post" >
                        @csrf
                        @method('DELETE')
                         <button type="submit" onclick="return confirm(' Yoo!! veux-tu vraiment supprimer cet eleve ????')" class="btn btn-outline-danger">Supprimer</button>
                    </form>

                </td>
            </tr>
            @empty
<tr>
    <td colspan="5" class="text-center">Aucun élève trouvé</td>
</tr>
            @endforelse
        </tbody>
    </table>

        {{$eleves->links()}}

</div>

@endsection