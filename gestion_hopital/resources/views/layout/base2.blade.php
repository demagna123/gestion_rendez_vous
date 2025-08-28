@extends('layout.base')

@section('content')
    <div class="admin">
        <h3>Veuillez vous connecter pour accéder au champ médécin</h3>
        <button ><a href="{{ route ('login')}}">Se connecter</a></button>
    </div>
    <style>
        .admin{
            margin-left: 320px;
            margin-top: 70px;
            h3{
                font-size:  40px;
            }
            button{
                padding: 15px 30px;
                border: none;
                border-radius: 5px;
                font-size:  15px;
                background-color: #007bff;
                    
            }
            button:hover{
                background-color: rgb(0,3,255);

            }
            a{
                text-decoration: none;
                color: #fff;
            }
        }

    </style>
@endsection
