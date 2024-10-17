<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean GDR</title>
    <link href="https://fonts.cdnfonts.com/css/old-london" rel="stylesheet">

    <link rel="icon" href="{{ Vite::asset('/resources/img/raccoon-w.png') }}" type="image/x-icon">

    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
