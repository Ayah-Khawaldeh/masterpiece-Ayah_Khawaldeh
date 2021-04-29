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
                        <a class="parent-item" href="index.html">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">
                        Update Users
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
                Mange Users
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">


            </div>
           <h5> IsBAn Status:
                @if ($useredit->isban == '0')
       <label class="py-2 px-3 badge btn-warning">Not Banned</label>

      @elseif ($useredit->isban == '1')
      <label class="py-2 px-3 badge btn-secondary">Banned</label>
      @endif
    </h5>
            <form action="/users/update/{{$useredit->id}}" method="POST"   enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$useredit->name}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Email:</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="Email" name="email"  value="{{$useredit->email}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="password" name="password" value="{{$useredit->password}}" >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Role:</label>
                        <div class="col-sm-8">


                            <select  style="width: 47.3rem" class="form-control" name="role" value="{{$useredit->role}}" >
                                <option value="Select Role"> Select Role</option>
                                <option value="admin"  selected >admin</option>
                                <option value="user"   selected >user</option>

                              </select>

                        </div>

                </div>
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Phone:</label>
                        <div class="col-sm-8">
                            <input type="Phone" class="form-control" placeholder="Phone" name="phone" value="{{$useredit->phone}}">
                        </div>

                    </div>
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Address" name="address" value="{{$useredit->address}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Ban:</label>
                        <div class="col-sm-8">


                            <select value="Select Ban & UnBand" style="width: 47.3rem" class="form-control" name="isban" value="{{$useredit->isban}}" >
                                <option value="Select Ban & UnBand">  Select Ban & UnBand</option>
                                <option value="0" selected >UnBand</option>
                                <option value="1" selected >Banned</option>

                              </select>

                        </div>

                </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Image:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="image" >
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
