<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>GYM SUPPLEMENTS HOMEPAGE</title>
</head>
<body>

    <header class="header">

        <nav class="nav-bar">

            <ul class="nav-list">
                <li class="nav-list-item"><a href="/">home</a></li>
                <li class="nav-list-item"><a href="/supplements">all supplements</a></li>
                <li class="nav-list-item"><a href="/supplements/create">add supplement</a></li>
                <li class="nav-list-item"><a href="/supplements">update supplement</a></li>
            </ul>

        </nav>

    </header>

    <div class="main">

        @yield('main-content')

    </div>

</body>
</html>
