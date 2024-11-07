<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">

</head>

<body style="background-color: #eeeeee;">
    @include('layouts.partials.navbar')
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #eeeeee;;
            position: fixed;
            top: 0;
            /* Ensures it's always at the top */
            margin-top: 120px;
            font-family: Arial, sans-serif;
            z-index: 10;
            /* Keeps sidebar above content */
        }

        .sidebar h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .sidebar img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="row" style="background-image:url('asset/photo/studentbackground.jpg'); width:211px; height: 450px; ">
            <img src="{{ asset('asset/photo/studentprofile.jpeg') }}" alt="profile.png" style="width:150px; height:120px; margin-top:50px; margin-left:30px;" class="rounded-circle me-2">
        </div>
    </div>

    <!-- <style>
        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #eeeeee;;
            position: fixed;
            top: 0;
            /* Ensures it's always at the top */
            margin-top: 120px;
            font-family: Arial, sans-serif;
            z-index: 10;
            /* Keeps sidebar above content */
        }

        .sidebar h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .sidebar img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style> -->

    <!-- Sidebar -->
    <!-- <div class="sidebar">
        <div class="row" style="background-image:url('asset/photo/lecturerbackground.png'); width:211px; height: 450px; ">
            <img src="{{ asset('asset/photo/lecturerprofile.jpg') }}" alt="profile.png" style="width:150px; height:120px; margin-top:50px; margin-left:30px;" class="rounded-circle me-2">
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>