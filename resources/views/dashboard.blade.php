<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">

    <style>
        .content-apps {
            background-color: rgb(255, 255, 255);
            padding: 30px;
            margin-left: 210px;
            /* Ensures content doesn't overlap with sidebar */
            margin-top: 100px;
            /* Adjusts the content position */
            width: calc(100% - 220px);
            height: calc(100vh - 100px);
            overflow-y: scroll;
        }

        .content-apps::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body style="background-color: #eeeeee;">
    @include('layouts.partials.navbar')

    <!-- student -->
    @can(abilities: 'student')
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #eeeeee;
            ;
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
    @endcan

    @can(abilities: 'lect-admin')

    <!-- lecturer and staff -->
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #eeeeee;
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
        <div class="row" style="background-image:url('asset/photo/lecturerbackground.png'); width:211px; height: 450px; ">
            <img src="{{ asset('asset/photo/lecturerprofile.jpg') }}" alt="profile.png" style="width:150px; height:120px; margin-top:50px; margin-left:30px;" class="rounded-circle me-2">
        </div>
    </div>
    @endcan

    <div class="container content-apps">
        <div class="d-flex justify-content-between">
            <!-- dashboard content student -->
            @can(abilities: 'student')
            <div class="card" style="width: 15rem; margin-bottom:30px">
                <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-1">
                        <small class="text-muted">TSLB1104</small>
                        <small class="text-muted">Unit: A2</small>
                    </div>
                    <h5 class="card-title" style="text-align: center; margin-bottom: 10px; margin-top: 10px;">Grammar in Context</h5>
                    <a href="#" class="btn btn-dark" style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                        Go to Subject
                    </a>
                </div>
            </div>
            @endcan

            <!-- dashboard content lecturer -->
            @can(abilities: 'lecturer')
            <div class="card" style="width: 15rem; margin-bottom:30px">
                <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-1">
                        <small class="text-muted">TSLB1104</small>
                    </div>
                    <h5 class="card-title" style="text-align: center; margin-bottom: 10px; margin-top: 10px;">Grammar in Context</h5>
                    <a href="#" class="btn btn-dark" style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                        Go to Subject
                    </a>
                </div>
            </div>
            @endcan
        </div>

        <!-- dashboard content administrator -->
        @can(abilities: 'administrator')
        <div class="d-flex justify-content-start">
            <div class="card" style="width: 15rem; margin-bottom:30px">
                <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-bottom: 20px; margin-top: 10px;">REGISTRATION</h5>
                    <a href="{{ route('viewregistrationformLecturer')}}" class="btn btn-dark" style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                        Go to Section
                    </a>
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-left:50px; margin-bottom:30px">
                <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-bottom: 20px; margin-top: 10px;">ANNOUNCEMENT</h5>
                    <a href="#" class="btn btn-dark" style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                        Go to Section
                    </a>
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-left:50px; margin-bottom:30px">
        </div>
        @endcan
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>