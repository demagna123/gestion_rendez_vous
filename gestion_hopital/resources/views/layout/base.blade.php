<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('home')}}">Accueil</a>
        </li>
        <li>
            <a href="{{ route('base1')}}">Admin</a>
        </li>
        <li>
            <a href="{{ route('base2')}}">Médécins</a>
        </li>
        <li>
            <a href="{{ route('base3')}}">Patient</a>
        </li>
        <li>
            <a href="{{ route('consultations.index')}}">Consultations</a>
        </li>
        <li>
            <a href="{{ route('logout')}}">
                Déconnexion
            </a>
        </li>
    </ul>
    @yield('content')
</body>
</html>