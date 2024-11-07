@extends('layouts.master', ['title'=> 'ADD ANNOUNCEMENT'])

@section('content')
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
@endsection