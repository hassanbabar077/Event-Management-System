<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


     <div class="container">
        <div class="row justify-content-center mt-5">
           <div class="col-lg-4 pt-5">
            <form action="{{route('admin.postlogin')}}" method="POST">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form2Example1" name="email" class="form-control" />
                  <label class="form-label" for="form2Example1">Email address</label>
                  @error('name')
                      <div class="alert text-danger">{{$message}}</div>
                  @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example2" name="password" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                  @error('name')
                  <div class="alert text-danger">{{$message}}</div>
                @enderror
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">


                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#!">Register</a></p>

                </div>
              </form>
           </div>
        </div>
     </div>
</body>
</html>
