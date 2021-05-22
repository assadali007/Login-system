<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <script src="{{asset('assets/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/fontawsome/css/all.css')}}">
    <script src="{{asset('assets/bootstrap/bootstrap.bundlle.min.js')}}"></script>
    <title>Form </title>
</head>
<body>

        <div class="container">
            <h3>Login form</h3>
            <form action="{{route('form_login_submit')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="text_username">Email address</label>
                    <input type="email" class="form-control" id="text_username" name="text_username" value="{{old('text_username')}}" >
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>

                     <div class="mb-3">
                    <label for="text_password">Password</label>
                    <input type="password" class="form-control" id="text_password" name="text_password" value="{{old('text_password')}}">
                  </div>
                  <div class="mb-3">
                    <label for="text_telephone">Telephone</label>
                    <input type="text" class="form-control" id="text_telefone" name="text_telephone" value="{{old('text_telephone')}}">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @if ($errors->any())
                <br>
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error )

                         <li>{{$error}}</li>

                       @endforeach
                   </ul>

               </div>

            @endif

        </div>


</body>
</html>
