<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Détails de l'élève</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Nom :</h5>
                <p class="card-text">{{ $eleve->name }}</p>

                <h5 class="card-title">Email :</h5>
                <p class="card-text">{{ $eleve->email }}</p>

                <h5 class="card-title">Téléphone :</h5>
                <p class="card-text">{{ $eleve->phone }}</p>

                <a href="{{ route('eleves.index') }}" class="btn btn-secondary mt-3">
                    ← Retour à la liste
                </a>
            </div>
        </div>
    </div>

</body>
</html>