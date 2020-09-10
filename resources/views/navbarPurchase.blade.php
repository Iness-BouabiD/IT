<head>
<link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
</head>
<nav  class="navbar navbar-expand-lg navbar-light navbar-fixed-top " style="background-color:#e5ccff;">
  <a class="navbar-brand" href="" style="font-family:'Homemade Apple', cursive;">Cinema
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/ticket')}}">Achetes ton ticket</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/show/Action')}}" >Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/show/Comédie')}}">Comédie</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/show/Horreur')}}">Horreur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/show/Aventure')}}">Aventure</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/show/Dessin animé')}}">Dessin animé</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/show/Documentaire')}}">Documentaire</a>
        </div>
      </li>
      @if (!Auth::check())
       <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">Login</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('/deco')}}">Logout</a>
      </li>
      @endif

    </ul>
   
  </div>
</nav>