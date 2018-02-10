@extends('layouts.app')

@section('content')


<div class="row mb-1">
    <div class="col-6"><h2>Records</h2></div>
    <div class="col-6">
        <a class="float-right btn btn-info" href="/books/create">Add</a>
    </div>
</div>
<div class="table-responsive-md">
    <table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Region</th>
            <th scope="col">Country</th>
            <th scope="col">Operator</th>
            <th scope="col">Brand</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $b)
        <tr>
            <td scope="row">{{$loop->index + 1}}</td>
            <td>{{$b->region}}</td>
            <td>{{$b->country}}</td>
            <td>{{$b->operator}}</td>
            <td>{{$b->brand}}</td>
            <td><a href="/books/{{$b->id}}">Print</a></td>
            {{--  <td>
                <a href="/books/{{$batch->id}}/edit">Edit</a>
                <a href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this Batch?');
                        if( result ){
                                event.preventDefault();
                                document.getElementById('delete-form{{$batch->id}}').submit();
                        }
                            "
                >Delete</a>

                <form id="delete-form{{$batch->id}}" action="{{ route('books.destroy',[$batch->id]) }}"
                    method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
            </td>  --}}
        </tr>
       @endforeach
    </tbody>
    </table>
</div>

@endsection


