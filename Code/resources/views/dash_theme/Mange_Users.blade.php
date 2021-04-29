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
                Mange Users
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <form method="POST" class="" id="default" enctype="multipart/form-data" action="users/store">
                @csrf
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">

                        <label class="col-sm-3 col-form-label col-form-label-sm">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        @error("name")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Email:</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        @error("email")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="password" name="password" >
                        </div>
                        @error("password")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Role:</label>
                        <div class="col-sm-8">


                            <select value="" style="width: 47.3rem" class="form-control" name="role">
                                <option value=""> Select Role</option>
                                <option value="admin"  selected >admin</option>
                                <option value="user"   selected >user</option>

                              </select>
                              @error("role")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                        </div>

                </div>
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Phone:</label>
                        <div class="col-sm-8">
                            <input type="Phone" class="form-control" placeholder="Phone" name="phone">
                        </div>
                        @error("name")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        @error("address")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Ban:</label>
                        <div class="col-sm-8">


                            <select value="" style="width: 47.3rem" class="form-control" name="isban"  >
                                <option value="">  Select Ban & UnBand</option>
                                <option value="0"   selected>UnBand</option>
                                <option value="1"   selected>Banned</option>

                              </select>

                        </div>

                </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Image:</label>
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
            Striped rows
        </div>

    </div >
        <div class="col-md-6">
            <form action="/Mange Users" method="GET">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            {{--  <input type="text" c>  --}}
                            <select name="roles" lass="form-control">
                                @if (isset($_GET['roles']))
                                <option value="{{$_GET['roles']}}">{{$_GET['roles']}}</option>
                                <option value="user">users</option>
                                <option value="admin"selected> admins</option>

                                 @else
                                 <option value="user">users</option>
                                <option value="admin"selected> admins</option>
                                @endif

                            </select>
                        </div>
                    </div>
                        <div class="col-md-4">
                            <button  type="submit" class="btn btn-dark py-1">Filter</button>
                        </div>
                </div>

            </form>
        </div>

    {{--  <div class="col-md-6"></div>  --}}
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">role</th>
                    <th scope="col">Image</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adress</th>
                    {{--  <th scope="col">Online/Offline</th>  --}}
                    <th scope="col">IsBan/UnBan</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delet</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($user as $val)

                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->name}}</td>
                    <td>{{$val->email}}</td>
                    <td>{{$val->role}}</td>
                    <td><img src='{{asset("images/$val->image")}}' style="height: 100px ; width: 100px" >   </td>
                    <td>{{$val->phone}}</td>
                    <td>{{$val->address}}</td>

                    {{--  <td>
                        @if ($val->isUserOnline())
                        <label class="py-2 px-3 badge btn-success">Online</label>

                          @elseif ($val->isUserOnline == '1')
                          <label class="py-2 px-3 badge btn-warning">Offline</label>
                          @endif
                        </td>

                    <td> --}}
                    <td>
                        @if ($val->isban == '0')
                        <label class="py-2 px-3 badge btn-info">Not Banned</label>

                          @elseif ($val->isban == '1')
                          <label class="py-2 px-3 badge btn-secondary">Banned</label>
                          @endif
                        </td>

                    <td>
                        <form method="post" action="/users/delete/{{$val->id}}">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <button class="btn btn-primary">
                     <a href="/users/edit/{{$val->id}}" style="text-decoration:none; color:white;" >Edit</a>
                    </button>
             </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!--Table-->

@endsection
