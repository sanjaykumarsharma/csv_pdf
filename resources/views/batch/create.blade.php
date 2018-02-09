@extends('layouts.app')

@section('content')

<div class="row mb-1">
    <div class="col-6"><h2></h2></div>
    <div class="col-6">
        <a class="float-right btn btn-info" href="/batches">Back</a>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card bg-light">
            <div class="card-header"><h3>Add New Batch</h3></div>

            <div class="card-body">
                <form method="post" action="{{ route('batches.store') }}">
                        {{ csrf_field() }}
                        @include('batch.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
