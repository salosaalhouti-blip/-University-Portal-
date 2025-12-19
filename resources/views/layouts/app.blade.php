<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('Website')</title>
    
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/> 

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="body-wrapper"> 

<nav class="navbar navbar-expand-md navbar-dark navbar-bg p-2">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-3" href="{{ route('home.index') }}">
            <i class="bi bi-mortarboard"></i>
            University Portal
        </a>
        <button class="btn btn-light d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>

<div class="content-wrapper">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-2 col-md-3 sidebar collapse d-md-block p-3" id="sidebarMenu">
            <nav class="nav flex-column">
              <a class="nav-link " href="{{ route('dashboard')}}"><span class="material-symbols-outlined">home</span> Home</a>
              <a class="nav-link " href="{{ route('department.index')}}"><span class="material-symbols-outlined">apartment</span>Departments</a>
              <a class="nav-link " href="{{ route('student.index') }}"><span class="material-symbols-outlined">groups</span> Students</a>
              <a class="nav-link " href="{{ route('course.index') }}"> <span class="material-symbols-outlined">book</span> Courses</a>
              <a class="nav-link " href="{{ route('professor.index') }}"><span class="material-symbols-outlined">person</span> Professors</a>
              <a class="nav-link " href="{{ route('enrollment.index') }}"><span class="material-symbols-outlined">article</span> Enrollments</a>
           </nav>  
          </div>
          
       <div class="col-lg-10 col-md-9 main-content py-4">
         
          @yield('content')
         
       </div>
        </div>
    </div>
</div>
        

<footer class="text-center py-4 border-top bg-footer">
    <p >&copy; 2025 University Portal. All rights reserved.</p>
</footer>
    </div>

<script src="{{ asset('js/layouts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
