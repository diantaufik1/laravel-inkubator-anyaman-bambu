<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet" >

    <title>Login | Inkubator</title>
    <style>
      html, body{
          height: 100%;
          background-color: aliceblue !important;
      }

      #card {
          color: white;
          background-color: rgb(93, 56, 21);
      }
      .white {
          color: white;
      }
    </style>
  </head>
  <body>  
    <div class="container mt-5">
      @if (session() ->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('Success') }}
          
        </div>
        @endif
      @if (session() ->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          </div>
        @endif
      </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="card mb-3 p-2" id="card" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://i.ibb.co/0C00Vng/Whats-App-Image-2022-01-11-at-22-39-45-removebg-preview.png" class="img-fluid rounded-start mt-3" alt="...">
                  </div>
                  <div class="col-md-8" >
                    <div class="card-body">
                      <form action="login" method="post">
                        @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="validationServer01" aria-describedby="emailHelp">
                              @error('email')
                              <div class="head" style="color: red; font-size: 13px;"">
                                {{ $message }}
                              </div>
                               @enderror
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Kata Sandi</label>
                              <input type="password" name="password" class="form-control @error('"password') is-invalid @enderror"  id="validationServer03" aria-describedby="emailHelp">
                              @error('password')
                              <div id="validationServer03Feedback" class="head" style="color: red; font-size: 13px;">
                                {{ $message }}
                              </div>
                              </div>
                               @enderror
                            </div>
                            <!-- <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <button type="submit" class="btn btn-warning white email mx-5 px-4">Login</button>
                           <a href="daftar" class="btn btn-warning white">Daftar</a>
                          </form>

                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </body>
</html>
