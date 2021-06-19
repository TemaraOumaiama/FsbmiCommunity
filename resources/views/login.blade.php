@extends('layouts.mainAuth')
@section('content')
<body>

    <div class="wrapper espace">
        <div class="image-holder">
            <a href="#"> <img src="{{asset('Auth/images/LOGO_FSBMI.png')}}" alt=" " class="imagelogo"></a>
            <img src="{{asset('Auth/images/dessin.png')}}" alt=" " class="imagedessin">
        </div>
        <div class="form-inner ">
            <form method="post" action="{{route('AuthEtudiant')}}">
            @csrf
                <div class="form-header">
                    Bienvenue dans
                    <br> FSBMI COMMUNITY
                    <hr class="jaune">
                </div>
                <div class="form-group ">

                    <input type="text " class="form-control" name="lg" placeholder="E-mail" data-validation="email ">
                </div>

                <div class="form-group ">
                    <input type="password" class="form-control " name="passe" placeholder="Password" data-validation="length " data-validation-length="min8 ">
                </div>

                <div class="form-group">

                    <a href="#"> Mot de passe oublié ?</a>
                </div>

                 <button type=" submit ">Se Connecter</button>
                <hr class="hhr ">
                <div class="form-group ">

                    <a class="new " href="{{asset('ChoixProfil')}}">Nouveau Inscrit</a>
                </div>
            </form>
        </div>
    </div>