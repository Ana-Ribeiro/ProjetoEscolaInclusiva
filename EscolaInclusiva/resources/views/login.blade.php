<html>


  <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/css/login.css">
      {{-- bootstrap css --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      {{-- bootstrap js --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <section class="vh-100" style="background-color: #8dbcc9;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="https://blog.milvus.com.br/wp-content/uploads/2018/02/165875-pmbok-como-aplicala-aos-processos-de-gestao-de-projetos-ti-871x1024.jpg"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form>
    
                      <div class="d-flex align-items-center mb-5 pb-1">
                        <span class="h1 fw-bold mb-0">Login</span>
                      </div>
    
    
                      <div class="form-outline mb-5">
                        <input type="email" id="form2Example17" class="form-control form-control-lg" style="border-radius: 3rem;"  placeholder="Email"/>
                      </div>
    
                      <div class="form-outline mb-5">
                        <input type="password" id="form2Example27" class="form-control form-control-lg" style="border-radius: 3rem;" placeholder="Password"/>
                      </div>
    
                   
                      <div class="pt-1 mb-5">
                        <button class="btn btn-dark btn-lg btn-block" type="button"  style="border-radius: 3rem;">Login</button>
                      </div>

    
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem conta? <a href="http://127.0.0.1:8000/registar"
                          style="color: #393f81;"> Registe-se</a></p>
                
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>