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

    <title>Register | Inkubator</title>
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
        <div class="row d-flex justify-content-center mt-5">
            <div class="card mb-3 p-2" id="card" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-12" >
                    <div class="card-body">
                      <form action="daftar" method="post">
                        @csrf
                          <div class="row mb-3">
                            <div class="col-md-4">
                              <label for="exampleInputEmail1" class="form-label" >Nama Pengguna</label>

                            </div>
                            <div class="col-md-8">
                              <input type="text" name="nama"  class="form-control @error('nama') is-invalid @enderror" id="validationServerUsername" aria-describedby="emailHelp">
                              @error('nama')
                              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                              </div>
                               @enderror
                            </div>
                           
                    
                          
                            
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-4">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                            </div>
                            <div class="col-md-8">
                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="validationServer01" aria-describedby="emailHelp">
                              @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                               @enderror
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <div class="col-md-4">
                              <label for="exampleInputEmail1" class="form-label">Kata Sandi</label>
                            </div>
                            <div class="col-md-8">
                              <input type="password" name="password" class="form-control" >
                              
                            </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-md-4">
                              <label for="exampleInputEmail1" class="form-label">Konfirmasi Sandi</label>
                            </div>
                            <div class="col-md-8">
                              <input type="password" name="konfirpassword" class="form-control @error('password') is-invalid @enderror" id="validationServer02" aria-describedby="emailHelp">
                              @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                               @enderror
                            </div>
                          </div>

                          
                          {{-- <div class="row mb-3">
                            <div class="col-md-4">
                              <label for="exampleInputEmail1" class="form-label">Role</label>
                            </div>
                            <div class="col-md-8">
                              <select class="form-select" aria-label="Default select example" name="role_id">
                                <option disabled value>Pilih Jenis aktivasi</option>
                               @foreach ( $role as $rol )
                               <option value="{{ $rol->id }}">{{ $rol->role_name }}</option>
                               @endforeach
                              </select>
                            </div>
                          </div> --}}
                          <div class="row mb-3">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8">
                              <a href="{{ url('/') }}" class="btn btn-warning white float-start">Kembali</a>
                              <button type="submit" class="btn btn-warning white email mx-5 px-4 float-end">Daftar</button>

                            </div>
                          </div>


                          </form>

                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </body>
</html>
