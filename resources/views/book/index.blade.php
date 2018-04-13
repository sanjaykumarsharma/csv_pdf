@extends('layouts.app')

@section('content')


<div class="row mb-1">
    <div class="col-6"><h2>Records</h2></div>
    <div class="col-6">
        <a class="float-right btn btn-info" href="{{ route('books.create') }}">Add</a>
        <a class="float-right btn btn-info  mr-1" href="{{ route('books.print') }}">Print</a>
        {{--  <a class="float-right btn btn-info" href="{{ route('books.deleteall') }}">Delete All</a>  --}}
    </div>
</div>

<form method="post" action="{{ route('books.filter') }}">
    <div class="row mb-1">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">

        <label for="country" class="col-sm-2 col-md-1  col-form-label">Country</label>
        <div class="col-sm-4 col-md-3">
            <select name="country" id="country" class="form-control">
                <option>All</option>
                @foreach($countries as $c)
                    <option
                        @if(isset($country))
                         @if($country== $c->country)
                          selected="selected"
                         @endif
                        @endif
                      >
                      {{$c->country}}
                    </option>
                @endforeach
            </select>
        </div>

        <label for="brand" class="col-sm-2 col-md-1  col-form-label">Brand</label>
        <div class="col-sm-4 col-md-3">
            <select name="brand" id="brand" class="form-control">
                <option>All</option>
                @foreach($brands as $b)
                    <option
                        @if(isset($brand))
                         @if($brand== $b->brand)
                          selected="selected"
                         @endif
                        @endif
                    >{{$b->brand}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-1">
            <input type="submit" class="btn btn-primary" value="Filter"/>
        </div>
    </div><br>
</form>


<div class="table-responsive-md">
    <table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Region</th>
            <th scope="col">Country</th>
            <th scope="col">Operator</th>
            <th scope="col">Brand</th>
            {{--  <th></th>  --}}
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
            {{--  <td><a href="{{ route('books.show', $b->id) }}">Print</a></td>  --}}
            {{--  <td><a href="/books/{{$b->id}}">Print</a></td>  --}}
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


