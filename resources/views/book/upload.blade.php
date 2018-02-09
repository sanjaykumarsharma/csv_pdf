@extends('layouts.app')

@section('content')


<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card bg-light">
            <div class="card-header"><h3>Upload Book</h3></div>

            <div class="card-body">
                <form method="post" action="books" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="upload-file">Upload</label>
                        <input type="file" name="upload-file" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Upload File"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection