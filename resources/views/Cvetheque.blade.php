@extends('layouts.main')
@section('content')
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

        <!---------- Sidebar ------------------------->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('/index')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-comment-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FSBMI COMMUNITY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="{{asset('/index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home Page</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Emplois | Stage</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="offrees">Offres Emploi | Stage</a>
                        <a class="collapse-item" href="demandees">Demandes Emploi | Stage</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw  fa-calendar-alt"></i>
                    <span>Evenement</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{asset('/eventAc')}}">Evenement Academique</a>
                        <a class="collapse-item" href="{{asset('/eventPr')}}">Evenement Professionnelle</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <div class="nav-item  active">
                <a class="nav-link collapsed" href="{{asset('Cvetheque')}}">
                    <i class="fas fa-fw  fa-file-alt"></i>
                    <span>Cvetheque</span></a>

            </div>
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <div class="nav-item">

                <a class="nav-link collapsed" href="{{asset('Listeabm')}}">
                    <i class="fas fa-fw  fa-users"></i>
                    <span>Liste Abonnemments</span></a>

            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="{{asset('Listeabn')}}">

                    <i class="fas fa-fw  fa-users"></i>
                    <span>Liste Abonnes</span></a>

            </div>


            <div class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-user-friends"></i>

                    <span>Groupes</span></a>

            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!------------ End of Sidebar ------------------------------------>
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
    <div id="content">
           <!------------ Top Bar------------------------------------>
       @include('layouts.topbar')
       <!------------------------CORPS-------------------------------->
       <!-- Begin Page Content -->
       <div class="container-fluid">
                    <div class="cv">


                        <form>

                            <div class="bor">

                                <h1> CV <input type="text" readonly value="Majda ElMiri"></input>
                                    <br/>
                                    <span class="d"> <input type="text"placeholder="Administratrice DB"></input> </span>
                                </h1>
                              
                            </div>
                            <hr>

                            <div class="c1">

                                <input type="text" placeholder="Age,Situation Familiale"> </input>
                                <br/>
                                <input type="text" placeholder="Votre Adresse "></input>
                                <br/>
                                <input type="email " placeholder="exemple@exemple.com "></input>
                                <br/>
                                <input type="email " placeholder="06-..... "></input>
                            </div>

                            <h2 style=" margin-left: 10px;margin-top: 30px; ">FORMATIONS ET DIPLOMES</h2>
                            <textarea class="lngtext" type="text" placeholder="Formations et dipolomes">
                            </textarea>

                            <h2 style="margin-left: 10px; ">
                                EXPERIENCES PROFESSIONNELLES
                            </h2>
                            <textarea class="lngtext" type="text" placeholder=" EXPERIENCES PROFESSIONNELLES">
                            </textarea>
                            <h2 style="margin-left: 10px; "> Compétences linguistiques</h2>
                            <textarea class="lngtext" type="text" placeholder=" Compétences linguistiques">
                            </textarea>

                            <h2 style="margin-left: 10px; "> Compétences informatiques </h2>
                            <textarea class="lngtext" type="text" placeholder=" Compétences informatiques">
                            </textarea>

                            <h2 style="margin-left: 10px; "> Centres d’intérêt</h2>
                            <textarea class="lngtext" type="text" placeholder="Centres d’intérêt">
                            </textarea>
                        </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>


        </div>
    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 