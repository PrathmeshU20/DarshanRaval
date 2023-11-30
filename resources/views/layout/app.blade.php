<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darshan Raval Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">

    @stack('styles')
    <style>
        body{
            font-family: 'Gloock', serif;
        }
        header{
            background-color: rgb(47, 95, 137);
            color: rgb(201, 201, 201);
        }
        .mid {
            background-color: rgb(174, 184, 199);
            min-height:calc(100vh - 149.93px -24);
        }
        footer{
            background-color: rgb(47, 95, 137);
            color: rgb(201, 201, 201);
            margin-top: auto;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="width-screen h-full">
        @include('layout.header')
        <main class="w-full  mid">
            @yield('appContents')
        </main>
        @include('layout.footer')
    </div>
</body>

</html>
