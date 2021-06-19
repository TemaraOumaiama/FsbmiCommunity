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

            <li class="nav-item active">
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

                        <a class="collapse-item" href="offrees">Offres Emploi| Stage</a>
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
            <div class="nav-item">
                <a class="nav-link collapsed" href="{{asset('Cvetheque')}}">
                    <i class="fas fa-fw  fa-file-alt"></i>
                    <span>Cvetheque</span></a>

            </div>
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <div class="nav-item ">

                <a class="nav-link collapsed" href="{{asset('Listeabm')}}">
                    <i class="fas fa-fw  fa-users"></i>
                    <span>Liste Abonnemments</span></a>

            </div>
            <div class="nav-item active">
                <a class="nav-link collapsed" href="{{asset('Listeabn')}}">

                    <i class="fas fa-fw  fa-users"></i>
                    <span>Liste Abonnes</span></a>

            </div>


            <div class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-user-Abonnes"></i>

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
       
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
       
                  <!-- END profile-header-content -->
             
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-Abonnes tab -->
                  <div class="tab-pane fade in active show" id="profile-Abonnes">
                     <h4 class="m-t-0 m-b-20">Liste Abonnes (14)</h4>
                     <!-- begin row -->
                     <div class="row row-space-2">
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">James Pittman</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                       <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                                          <li><a href="javascript:;">Supprimer</a></li>
                                          <li><a href="javascript:;">Bloque</a></li>
                                         
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Mitchell Ashcroft</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Ella Cabena</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                       <ul class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, -2px, 0px);">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Declan Dyson</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">George Seyler</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Patrick Musgrove</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Taj Connal</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Laura Pollock</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Dakota Mannix</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Timothy Woolley</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Benjamin Congreve</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Mariam Maddock</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Blake Gerrald</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Gabrielle Bunton</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Abonnes</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:;">Action 1</a></li>
                                          <li><a href="javascript:;">Action 2</a></li>
                                          <li><a href="javascript:;">Action 3</a></li>
                                          <li class="divider"></li>
                                          <li><a href="javascript:;">Action 4</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end #profile-Abonnes tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>
       </div>
       
             
        


       
    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 