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
            <a href="{{ route('login')}}">
                Se connecter
            </a>
        </li>
    </ul>
    <style>
        body, ul, li, a {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 10px 20px;
            
        }

        li a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        li a:hover {
            color: #0056b3;
        }
    </style>
    @yield('content')
</body>
</html>