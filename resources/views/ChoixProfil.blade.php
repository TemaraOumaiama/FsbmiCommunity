@extends('layouts.mainAuth')
@section('content')
<body>

    <div class="wrapper espace">
        <div class="image-holder">
            <a href="#"> <img src="{{asset('Auth/images/LOGO_FSBMI.png')}}" alt=" " class="imagelogo"></a>
            <img src="{{asset('Auth/images/dessin.png')}}" alt=" " class="imagedessin">
        </div>
        <div class="form-inner ">
            <form action="#">
                <div class="form-header">
                    Bienvenue dans
                    <br> FSBMI COMMUNITY
                    <hr class="jaune">
                </div>
                <div class="form-group">
                  
                    <h2 class="t">Vous etes</h2>
                    <button type="submit"><a href="{{asset('inscEtud')}}">Etudiant</a></button> 
                    <button type="submit" ><a href="{{asset('inscProf')}}">Professeur</a></button>
                    <button type="submit" ><a href="{{asset('inscEtud')}}">Entreprise</a></button>
                    <button type="submit" ><a href="{{asset('inscEtud')}}">Laureat</a></button>
                    <button type="submit" ><a href="{{asset('inscEtud')}}">Invite</a></button>
                    <button type="submit" ><a href="{{asset('inscEtud')}}">Association</a></button>
                     
        

               

                </div>

            
            </form>
        </div>
    </div>
