<!DOCTYPE html>
<html>
<head>
    <title>Laravel Auth</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('registerz') }}">Đăng ký</a></li>
                <li><a href="{{ route('loginz') }}">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
