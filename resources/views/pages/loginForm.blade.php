<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/css/bootstrapCDN.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container bg-white shadow mx-auto mt-5 rounded">
    <form method="POST" action="{{ route('loginStore') }}" class="py-3 p-5">
        @csrf
        <h1 class="text-center">Login</h1>
        @if (session('authError'))
            <ul>
                <li>{{ session('authError') }}</li>
            </ul>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    {{--                    @dump($errors)--}}
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
        </div>
        <div class="mb-3">
            <input type="checkbox" name="remember" id="remember"/>
            <label for="remember">Remember Me</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
