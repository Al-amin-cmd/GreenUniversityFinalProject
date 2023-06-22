 <header id="header" class="fixed-top d-flex align-items-center">
     <div class="container d-flex align-items-center justify-content-between">

         <div class="logo">
             <h1 class="text-light"><a href="{{ route('dashboard') }}">Refugee</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             {{-- <a href="index.html"><img src="{{ asset('../../ui/frontend/img/Rohingya-2.jpg') }}" alt=""
                     class="img-fluid"></a> --}}
         </div>

         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container-fluid">
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="{{ route('about') }}">About</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="{{ route('service') }}">Services Post</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="{{ route('donation') }}">Donation Form</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle ml-3" href="#" id="navbarDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 {{ Auth::user()->name }}
                                 <span class="pl-3">-</span>

                                 <img style="height: 30px; width:30px; border-radius: 60px;"
                                     src="{{ asset('../../ui/frontend/img/Rohingya-2.jpg') }}" alt="profile image">
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="{{ route('index') }}">Profile</a></li>
                                 @can('admin')
                                     <li><a class="dropdown-item" href="{{ route('people.create') }}">Add People</a>
                                     </li>
                                 @endcan

                                 @can('superAdmin')
                                     <li><a class="dropdown-item" href="{{ route('people.create') }}">Add People</a>
                                     </li>
                                 @endcan
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li>
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf
                                         <a class="dropdown-item" href="route('logout')"
                                             onclick="event.preventDefault();
                                        this.closest('form').submit();">logout</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>

                 </div>
             </div>
         </nav>

         {{-- <nav id="navbar" class="navbar"> --}}


         {{-- <ul>

                 <li><a class="active" href="{{ route('dashboard') }}">Home</a></li>
                 <li><a href="{{ route('about') }}">About</a></li>
                 <li><a href="{{ route('service') }}">Services</a></li>
                 <li>
                     @can('donation')
                         <a href="{{ route('donation') }}">Donate</a>
                     @endcan
                 </li>
                 <li><a href="{{ route('contact') }}">Contact</a></li>
                 <li> @include('layouts.navigation')</li>

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i> --}}
         {{-- </nav><!-- .navbar --> --}}

     </div>
 </header>
