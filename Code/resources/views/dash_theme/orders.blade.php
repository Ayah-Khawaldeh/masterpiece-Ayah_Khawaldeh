@extends('layout.dash.dash_main')
@section('contant')
<!-- breadcrumb -->
<div class="page-heading">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <div class="breadcrumb_nav">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a class="parent-item" href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        {{--  <i class="fa fa-home"></i>  --}}
                        <a class="parent-item" href="index.html">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">
                       Mange Categories
                    </li>
                </ol>
            </div>
        </div>

    </div>
</div>
<!-- breadcrumb_End -->
<div class="mb-4">
    <div class="card card-shadow mb-4">
        <div class="card-header">
            <div class="card-title">
                Mange Customers
            </div>
        </div>
  
<!--Start Table-->
<div class="card card-shadow mb-4">
   
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">odrer number</th>
                    <th scope="col">username</th>
                    <th scope="col">Payment method</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($x as $val)


                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->FirstName}} {{$val->LastName}}</td>
                    <td>{{$val->payment}}</td>
                    <td>{{$val->Country}}</td>
                    <td>{{$val->City}}</td>
                    <td>{{$val->Address}}</td>
                    <td>{{$val->Phone}}</td>
                    <td>{{$val->email}}</td>

                   
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
<!--Table-->

@endsection
