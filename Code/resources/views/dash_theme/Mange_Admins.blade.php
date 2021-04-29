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
                       Mange Users
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
                Mange Admins
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>
            <form method="POST" class="" id="default" enctype="multipart/form-data" action="admins/store">
                @csrf
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        @error("name")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Email:</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        @error("email")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="password" name="password" >
                        </div>
                        @error("password")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Image:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="image">
                        </div>
                        @error("image")
                        <p style="color:red;">{{$message}}</p>
                        @enderror

                </div>
                </fieldset>
                <button type="submit" class="finish btn btn-danger" style="background:#6599b5 ; border-color:#6599b5" value="submit">Submit</button>
               </form>
        </div>
    </div>
</div>
<!--End Form-->

<!--Start Table-->
<div class="card card-shadow mb-4">
    <div class="card-header">
        <div class="card-title">
            Admins
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delet</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $val)


                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->name}}</td>
                    <td>{{$val->email}}</td>
                    <td><img src='{{asset("images/$val->image")}}' style="height: 100px ; width: 100px" >   </td>
                    <td>

                        <form method="post" action="/admins/delete/{{$val->id}}">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
         <td>
               <button class="btn btn-primary">
             <a href="/admins/edit/{{$val->id}}" style="text-decoration:none; color:white;" >Edit</a>
           </button>
    </td>
</td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
<!--Table-->

@endsection
