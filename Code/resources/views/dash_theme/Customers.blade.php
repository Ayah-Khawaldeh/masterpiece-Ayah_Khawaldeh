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
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $val)


                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->name}}</td>
                    <td>{{$val->email}}</td>
                    <td><img src='{{asset("images/$val->image")}}' style="height: 100px ; width: 100px" >   </td>
                    <td>{{$val->created_at}}</td>
                    <td>
                        <form method="post" action="/user/delete/{{$val->id}}">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
         <td>
            
    </td>
</td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
<!--Table-->

@endsection
