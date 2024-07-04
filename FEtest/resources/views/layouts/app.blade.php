<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '過去問道場')</title>
    <link rel="stylesheet" href="/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
    <main class="container mt-10">
        <div class="row">
            <div class="col-md-7">
                <article class="main-contents">
                    <div>
                        @yield('content')
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>

        </div>
    </main>
</body>

</html>
