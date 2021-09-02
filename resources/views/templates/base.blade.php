<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app/.css') }}">
</head>
<body>

    <header>
        @include('templates.header')
    </header>

        <div class="container">
            @yield('content')
        </div>


    <header>
        @include('templates.footer')
    </header>


</body>
</html>