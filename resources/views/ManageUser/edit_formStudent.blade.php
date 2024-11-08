@extends('layouts.master', ['title'=> 'REGISTRATION FORM'])

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
    <!-- Title: personal information -->
    <div class="mb-4">
        <h4>Personal Information</h4>
    </div>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-4 row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
            </div>
        </div>

        <!-- Staff ID and Identity Card Number -->
        <div class="mb-4 row">
            <label for="input_staffID" class="col-sm-2 col-form-label">Staff ID</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="input_staffID" name="staff_id" placeholder="Enter your Staff ID">
            </div>

            <label for="inputIC" class="col-sm-2 col-form-label">Identity Card Number</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputIC" name="ic" placeholder="Enter your IC number">
            </div>
        </div>

        <!-- Email Address, Gender, and Contact Number -->
        <div class="mb-4 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter your email">
            </div>
            <label for="inputContact" class="col-sm-2 col-form-label">Contact Number</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputContact" name="contact" placeholder="Enter contact number">
            </div>
        </div>

        <!-- Gender and Department -->
        <div class="mb-4 row">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
                <select class="form-control" id="inputGender" name="gender">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <label for="inputDepartment" class="col-sm-2 col-form-label">Department</label>
            <div class="col-sm-4">
                <select class="form-control" id="inputDepartment" name="department">
                    <option value="" disabled selected>Select Department</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                </select>
            </div>
        </div>
        <br>
        <hr>

        <!-- Title: unit and subject enrollment -->
        <div class="mb-4">
            <h4 class="mt-4">Unit-Subject Enrollment</h4>
        </div>

        <!-- Subject Code and Unit  -->
        <div class="mb-4 row">
            <label for="input_unitName" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-4">
                <select class="form-control" id="input_unitName" name="unitName">
                    <option value="" disabled selected>Select Unit</option>
                    <option value="Unit A">A1</option>
                    <option value="Unit A">A2</option>
                    <option value="Unit A">A3</option>
                    <option value="Unit B">B1</option>
                    <option value="Unit B">B2</option>
                    <option value="Unit B">B3</option>
                </select>
            </div>
            <label for="input_subjectCode" class="col-sm-2 col-form-label">Subject Code</label>
            <div class="col-sm-4">
                <select class="form-control" id="input_subjectCode" name="subjectCode">
                    <option value="" disabled selected>Select Subject Code</option>
                    <option value="MAT101">MAT101 - Mathematics</option>
                    <option value="SCI201">SCI201 - Science</option>
                    <option value="ENG301">ENG301 - English</option>
                </select>
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="row">
            <div class="col-md-11 mt-3 text-center">
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