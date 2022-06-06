<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestão de Projetos</title>

        {{-- bootstrap css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- bootstrap js --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/sidemenu.css">
      </head>
    
    
    <body >
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/registar">Registar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <div class="p-1 my-container active-cont">
        Main Content Here
        ...
        Replace the menu toggle icon as per your needs
        <a class="btn border-0" id="menu-btn">
          <i class="bx bx-menu"></i>
        </a>
      </div>
      
      
      
      <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100">
          <a href="#" class="nav-link h3 text-white my-2">
            Menu
          </a>
          <li href="#" class="nav-link">
            <span class="mx-2">Home</span>
          </li>
          <li href="#" class="nav-link">
            <span class="mx-2">About</span>
          </li>
          <li href="#" class="nav-link">
            <span class="mx-2">Contact</span>
          </li>
        </ul>
      </div>


      
      
      
      @yield('content')
      
      
    

        
        

         

      
 

 
    
      <script src="/js/scripts.js"></script>
    </body>
</html>


