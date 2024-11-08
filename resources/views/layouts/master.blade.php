<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- logo ipg kt atas --}}
    <link rel="shortcut icon" href="{{ asset('asset/photo/logoipg.png') }}" type="image/png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <title>IPGKI-edu Gather</title>

    <style>
        .content-apps {
            background-color: rgb(255, 255, 255);
            padding: 30px;
            margin-left: 230px;
            /* Ensures content doesn't overlap with sidebar */
            margin-top: 10px;
            /* Adjusts the content position */
            width: calc(100% - 260px);
            height: calc(100vh - 195px);
            overflow-y: scroll;
        }

        .content-apps::-webkit-scrollbar {
            display: none;
        }

        .title-apps {
            margin: 100px 30px 10px 230px;
            height: 75px;
            display: flex;
            align-items: center;
            /* Vertically centers the content */
        }
    </style>

</head>

<body style="background-color: #eeeeee;">
    @include('layouts.partials.sidebar')
    @include('layouts.partials.navbar')

    <div class="title-apps" style="background-color:#A5D4E9">
        <h6 class="text-dark" style="font-size: 2rem; margin-left: 20px;">{{ $title }}</h6>
    </div>

    <div class="container content-apps">
        @yield(section: 'content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>