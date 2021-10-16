<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'LaravelApp'}}</title>
    <link rel="stylesheet" href="">
    @section('head')
    @show
</head>
<body>
    <header>
        @section('header')
        @show
    </header>
    <div class="mainContainer">
        @section('content')
        @show
        @section('content2')
        @show
    </div>
    <footer>
        @section('footer')
        @show
    </footer>
    <script src=""></script>
</body>
</html>
