@extends('layouts.app')

@section('content')

    <div class="container">

    <div class="row mb-1 d-print-none">
        <div class="col-6"></div>
        <div class="col-6">
            <a class="float-right btn btn-info" href="{{ route('books.index') }}">Back</a>
        </div>
    </div>

    <img src="{{ asset('images/first_page.png') }}" class="img-fluid" style="width:100%;height:auto;padding-top: 10px;">
    <div class="page-brake"></div>
    @foreach($books as $book)
        <div class="mt-5">
            <h3 class="text-right text-success">{{$book->region}}</h3>

            <div class="row">
                <div class="col-md-9"><h1 class="text-primary">{{$book->brand}}</h1></div>
                <div class="col-md-3"><h3 class="float-right text-warning" style="margin-top: 12px;">{{$book->country}}</h3></div>
            </div>
            <hr class="hr-line">
            <div class="row">
                <h4 class="col-md-6">FAST FACTS</h4>
            </div>

            <table class="table table-sm bnone">
                <tr>
                    <td>
                        <table class="table table-sm bnone">
                        <tr>
                            <td class="head">Website</td>
                            <td>{{$book->website}}</td>
                        </tr>
                        <tr>
                            <td class="head">Email</td>
                            <td>{{$book->email}}</td>
                        </tr>
                        <tr>
                            <td class="head">Telephone</td>
                            <td>{{$book->telephone}}</td>
                        </tr>
                        <tr>
                            <td class="head">Fax</td>
                            <td>{{$book->fax}}</td>
                        </tr>
                        <tr>
                            <td class="head">Linkedin</td>
                            <td>{{$book->linkedin}}</td>
                        </tr>
                        <tr>
                            <td class="head">Subscribers</td>
                            <td>{{$book->subscriber}}</td>
                        </tr>
                        <tr>
                            <td class="head">Technology</td>
                            <td>{{$book->technology}}</td>
                        </tr>
                        <tr>
                            <td class="head">Ownership</td>
                            <td>{{$book->parent_owner}}</td>
                        </tr>
                        <tr>
                            <td class="head">Headquarter</td>
                            <td>{{$book->headquarter}}</td>
                        </tr>
                        <tr>
                            <td class="head">Established</td>
                            <td>{{$book->established}}</td>
                        </tr>

                        </table>
                    </td>
                    <td style="width:400px" class="ml-3">
                        <h4>Company Overview</h4>
                        {{$book->company_overview}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="page-brake"></div>
    @endforeach


</div>

@endsection


