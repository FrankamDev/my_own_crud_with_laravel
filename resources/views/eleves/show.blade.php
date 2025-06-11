
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Détails de l\'élève')
    @section('content')

    <div class="container mt-4">
        <div class="card bg-dark text-white border-info">
            <div class="card-header border-bottom border-info">
                <h3>Détails de l'élève</h3>
            </div>
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="d-flex">

                    <h5 class="card-title ">Nom : </h5>

                    <p class="card-text">{{ $eleve->name }}</p>
                </div>
            <div class="d-flex">

                <h5 class="card-title">Email : </h5>
                <p class="card-text">{{ $eleve->email }}</p>
            </div>
            <div class="d-flex">

                <h5 class="card-title">Téléphone : </h5>
                <p class="card-text">{{ $eleve->phone }}</p>
            </div>

                <a href="{{ route('eleves.index') }}" class="btn btn-outline-info mt-3">
                    ← Retour à la liste
                </a>
            </div>
        </div>
    </div>

    @endsection

</body>
