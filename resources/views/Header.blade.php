<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>@yield('title') LOGO</title>
</head>

<body>
    <div class="nav navbar bg-light d-flex justify-content-end">
        @guest
            <span class="nav-link mx-1 rounded-full font-semibold hover:bg-purple-400">
                <a href="{{ route('login') }}">Login</a>
            </span>
            <span class="nav-link mx-2 rounded-full font-semibold hover:bg-purple-500">
                <a href="{{ route('registration') }}">Register</a>
            </span>
        @else
            <span class="nav-link mx-2 rounded-full font-semibold hover:bg-purple-500">
                <a href="{{ route('logout') }}">Logout</a>
            </span>
        @endguest
    </div>

    <ul class="bg-purple-500">
        <li class="hover:bg-purple-400"><a href="/contact">Contact</a></li>
        <li class="hover:bg-purple-400"><a href="/resource">Data</a></li>
        <li class="hover:bg-purple-400"><a href="/blog">Blog</a></li>
        <li class="hover:bg-purple-400"><a href="/create">Create</a></li>
        <li class="hover:bg-purple-400"><a href="/home">Home</a></li>
        <li class="hover:bg-purple-400" style="float:left"><a href="/">LOGO</a></li>
    </ul>
    @yield('content')

</body>

</html>
