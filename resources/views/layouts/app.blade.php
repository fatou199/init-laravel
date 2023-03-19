<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- récupérer le contenu de la page enfant vers une page maître --}}
    <h1>Provient du template</h1>
    <div style="background-color: orange">
        @yield('page-content')
    </div>
</body>
</html>