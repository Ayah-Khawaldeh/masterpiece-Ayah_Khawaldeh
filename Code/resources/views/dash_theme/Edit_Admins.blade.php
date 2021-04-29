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
                        Update Admins
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
                 Admins
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>
            <form action="/admins/update/{{$adminedit->id}}" method="POST"   enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$adminedit->name}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Email:</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$adminedit->email}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="password" name="password" value="{{$adminedit->password}}" >
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Admin Image:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="admin_image" value="{{$adminedit->admin_image}}">
                        </div>


                </div>
                </fieldset>
                <button type="submit" class="finish btn btn-danger" style="background:#6599b5 ; border-color:#6599b5" value="submit">Update</button>
               </form>
        </div>
    </div>
</div>
<!--End Form-->

@endsection
