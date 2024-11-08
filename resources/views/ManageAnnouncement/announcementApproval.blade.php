<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- logo ipg kt atas --}}
    <link rel="shortcut icon" href="{{ asset('asset/photo/logoipg.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
        <title>IPGKI-edu Gather</title>

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

    @can(abilities: 'administrator')

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
        <div class="row"
            style="background-image:url('asset/photo/lecturerbackground.png'); width:211px; height: 450px; ">
            <img src="{{ asset('asset/photo/lecturerprofile.jpg') }}" alt="profile.png"
                style="width:150px; height:120px; margin-top:50px; margin-left:30px;" class="rounded-circle me-2">
        </div>
    </div>
    @endcan

    <div class="container content-apps">
    <div class="container-fluid">
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" name="announcementTitle">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputText" class="col-sm-2 col-form-label">Announcement Details</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputText" name="announcementDetails" rows="4"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Published To</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" name="announcementPublished">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>

                <a href="" class="btn btn-secondary ms-3">
                    {{ __('Cancel') }}
                </a>
            </div>
        </div>
    </form>
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>