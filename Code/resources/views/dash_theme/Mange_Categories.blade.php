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
                Mange Categories
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>
            <form method="POST" class="" id="default" enctype="multipart/form-data" action="categories/store">
                @csrf
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Category Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="category_name" >
                        </div>
                        @error("category_name")
                         <p style="color:red;">{{$message}}</p>
                         @enderror

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> CategoryImage:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="category_image">
                        </div>
                        @error("category_image")
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
            Categories
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delet</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $val)


                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->category_name}}</td>
                    <td><img src='{{asset("images/$val->category_image")}}' style="height: 100px ; width: 100px" >   </td>
                    <td>
                        <form method="post" action="/categories/delete/{{$val->id}}">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
         <td>
               <button class="btn btn-primary">
             <a href="/categories/edit/{{$val->id}}" style="text-decoration:none; color:white;" >Edit</a>
            {{-- <a href="" style="text-decoration:none; color:white;" >Edit</a> --}}
           </button>
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
