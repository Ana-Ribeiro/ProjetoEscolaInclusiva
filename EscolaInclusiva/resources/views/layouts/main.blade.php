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
    </head>
    
    
    <body >
        @yield('content')

        
        <div class="container my-5">
        <footer
        
        class="text-center text-lg-start text-white"
          style="background-color: #1AA4A6">
          
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
     

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contactos</h6>
            <p><i class="fas fa-home mr-3"></i> ESTG|IPVC</p>
            <p><i class="fas fa-envelope mr-3"></i> Avenida do Atlântico, 644</p>
            <p><i class="fas fa-phone mr-3"></i> 4900-348 Viana do Castelo</p>
            <p><i class="fas fa-print mr-3"></i> escolainclusiva@estg.ipvc.pt</p>
            <p><i class="fas fa-print mr-3"></i> (+351) 258 819 700</p>

          </div>
         

      
 

 
       
        </footer>
        </div>
    
    </body>
</html>


