@extends('layouts.master', ['title'=> 'REGISTRATION FORM -Subject'])

@section('content')

<style>
    .form-control {
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #4a90e2;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
    }

    .btn {
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #357abd;
    }

    .btn-secondary:hover {
        background-color: #6c757d;
    }
</style>

<div class="container-fluid py-2">
    <!-- Title: Subject Information -->
    <div class="mb-4">
        <h4>Subject Information</h4>
    </div>

    <form method="POST" action="" enctype="multipart/form-data">
        @csrf

        <!-- Subject Name -->
        <div class="mb-4 row">
            <label for="input_subjectName" class="col-sm-2 col-form-label">Subject Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="input_subjectName" name="subjectName" placeholder="Enter subject name" required>
            </div>
        </div>

        <!-- Subject Code -->
        <div class="mb-4 row">
            <label for="input_subjectCode" class="col-sm-2 col-form-label">Subject Code</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="input_subjectCode" name="subjectCode" placeholder="Enter subject code" required>
            </div>
        </div>

        <!-- Subject Photo -->
        <div class="mb-4 row">
            <label for="input_subjectPhoto" class="col-sm-2 col-form-label">Subject Photo</label>
            <div class="col-sm-8">
                <input class="form-control" type="file" id="input_subjectPhoto" name="subjectPhoto" required>
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="row">
            <div class="col-md-11 mt-4 text-center">
                <button type="submit" class="btn btn-primary px-4 py-2 me-2">
                    {{ __('Register') }}
                </button>
                <a href="" class="btn btn-secondary px-4 py-2">
                    {{ __('Cancel') }}
                </a>
            </div>
        </div>
    </form>
</div>

@endsection