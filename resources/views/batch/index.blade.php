@extends('layouts.app')

@section('content')


<div class="row mb-1">
    <div class="col-6"><h2>Batches</h2></div>
    <div class="col-6">
        <a class="float-right btn btn-info" href="/batches/create">Add</a>
    </div>
</div>
<div class="table-responsive-md">
    <table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Batch</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($batches as $batch)
        <tr>
            <td scope="row">{{$loop->index + 1}}</td>
            <td>{{$batch->batch}}</td>
            <td>
                <a href="/batches/{{$batch->id}}/edit">Edit</a>
                <a href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this Batch?');
                        if( result ){
                                event.preventDefault();
                                document.getElementById('delete-form{{$batch->id}}').submit();
                        }
                            "
                >Delete</a>

                <form id="delete-form{{$batch->id}}" action="{{ route('batches.destroy',[$batch->id]) }}"
                    method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection


