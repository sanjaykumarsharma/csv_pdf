@extends('layouts.app')

@section('content')


<div class="row mb-1 d-print-none">
    <div class="col-6"></div>
    <div class="col-6">
        <a class="float-right btn btn-info" href="/books">Back</a>
    </div>
</div>
<h4>FAST FACTS</h4>
<div class="table-responsive-md">
    <table class="table table-sm bnone">
    <tr>
        <td>Region</td>
        <td>{{$book->region}}</td>
        <td rowspan="5" style="width:250px">
          <h4>Company Overview</h4>
          {{$book->company_overview}}
        </td>
    </tr>
    <tr>
        <td>Country</td>
        <td>{{$book->country}}</td>
    </tr>
    <tr>
        <td>Operator</td>
        <td>{{$book->operator}}</td>
    </tr>
    <tr>
        <td>Brand</td>
        <td>{{$book->brand}}</td>
    </tr>
    <tr>
        <td>Host Network</td>
        <td>{{$book->host_network}}</td>
    </tr>

    </table>
</div>

@endsection


