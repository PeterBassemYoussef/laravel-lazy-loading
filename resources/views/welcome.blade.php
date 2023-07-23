<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .content {
            width: 100%;
            height: 100%;
            text-align: center
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>
                Welome to Laravel 9 Lazy Loading Images Template
            </h1>
            <a class="btn btn-primary" href="{{ route('gallery') }}">Check the Gallery</a>
        </div>
    </div>

</body>

</html>
