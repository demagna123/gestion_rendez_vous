@extends('layout.base')

@section('content')
    <h1>Se connecter</h1>
    <p>
        Veuillez entrer vos identifiants pour accéder à votre espace personnel.
    </p>
    @if ($message = Session::get('success'))
        <h3>{{ $message }}</h3>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Saisissez votre email" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" placeholder="Saisissez votre Mot de passe" required>
        </div>
        <a href="">Mot de passe oublié ?</a>
        <button type="submit">Se connecter</button>
    </form>
    <style>
        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        form a{
            text-decoration: none;
            align-items: center;
            color: #0037cc;
            
        }
        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }
        p {
            text-align: center;
            color: #555;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        form div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #0047ff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0037cc;
        }
    </style>


@endsection
