<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Le nom de l'utilisateur est {{ $name }} et elle a {{ $age }} ans</h1>

    {{-- @if ($name == 'Fatou')
        <p>Petit message qui prouve que l'user est bien Fatou</p> 
    @else
        <p>Petit message qui prouve que l'user est pas Fatou</p>
    @endif --}}


    {{-- @switch($age)

    @case($age < 16)
        <p>L'utilisateur est encore mineur</p>
        @break  

    @case($age > 16)
        <p>L'utilisateur est en âge de s'inscrire</p>
        @break

    @default
    <p>L'utilisateur n'a pas d'âge </p>
    @endswitch --}}

    @isset($product1)
        <p>Le produit existe</p>
    @endisset

    @empty($product)
        <p>La valeur du produit est vide ou non défini</p>
    @endempty
</body>
</html>