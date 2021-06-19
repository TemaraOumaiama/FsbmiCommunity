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
                <div class="form-header">
                    Nouveau Inscrit | Etudiant
                    <hr class="jaune">
                </div>
                <div class="form-group ">

                    <input type="text " class="form-control " placeholder="Code Apogee" data-validation="text" required>
                </div>
                <div class="form-group ">

                    <input type="text " class="form-control " placeholder="Nom" data-validation="text" required>
                </div>
                <div class="form-group ">
                    <input type="text " class="form-control " placeholder="Prenom" data-validation="text" required>
                </div>
                <div class="form-group ">

                    <input type="text " class="form-control " placeholder="Date Naissance" data-validation="Date" required>
                </div>
                <div class="form-group ">

                    <input type="text " class="form-control " placeholder="E-mail" data-validation="email " required>
                </div>

                <div class="form-group ">
                    <input type="password " class="form-control " placeholder="Password" data-validation="length " data-validation-length="min8" required>
                </div>
                <div class="form-group ">
                    <input type="password " class="form-control " placeholder="Confirmez Password" data-validation="length " data-validation-length="min8" required>
                </div>

                <button type="submit">Valider</button>

            </form>
        </div>
    </div>