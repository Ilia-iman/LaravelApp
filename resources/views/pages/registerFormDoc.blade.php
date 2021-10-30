<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'LaravelApp'}}</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
<header></header>
<div class="mainContainer">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <div class="main-block">
        <h1>Registration</h1>
        <form action="{{ route('storeDoc') }}" method="post">
            @csrf
           {{-- @if ($success)
                <div class="alert alert-success">
                    You have registered successfully!
                </div>
            @endif--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--            <hr>
                        <div class="account-type">
                            <input type="radio" value="none" id="radioOne" name="account" checked/>
                            <label for="radioOne" class="radio">Personal</label>
                            <input type="radio" value="none" id="radioTwo" name="account" />
                            <label for="radioTwo" class="radio">Company</label>
                        </div>--}}
            <hr>
            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" value="{{ old('email') }}"/>
            <label id="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"/>
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" />
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password_confirmation" id="name" placeholder="Confirm Password" />
            <hr>
            <button type="submit" href="/">Submit</button>
            {{--            <div class="gender">
                            <input type="radio" value="none" id="male" name="gender" checked/>
                            <label for="male" class="radio">Male</label>
                            <input type="radio" value="none" id="female" name="gender" />
                            <label for="female" class="radio">Female</label>
                        </div>
                        <hr>
                        <div class="btn-block">
                            <p>By clicking Register, you agree on our <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for W3Docs</a>.</p>
                        </div>--}}
        </form>
    </div>
</div>
<footer>
</footer>
<script src=""></script>
</body>
</html>
