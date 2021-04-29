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
                       Mange Products
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
                Mange Products
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>
            <form method="POST" class="" id="default" enctype="multipart/form-data" action="products/store">
                  @csrf
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Product Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="product_name" value="">


                        </div>
                        @error("product_name")
                         <p style="color:red;">{{$message}}</p>
                         @enderror

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Description:</label>
                        <div class="col-sm-8">
                            <!-- <input type="text" class="form-control" placeholder="Description" name="description" value=""> -->
                            <textarea id="w3review" name="description" class="form-control" rows="4" cols="95">  </textarea>
                        </div>
                        @error("description")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Price" value="" name="price">
                        </div>
                        @error("price")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Special Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Price" value="" name="special_price">
                        </div>
                        @error("special_price")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Status:</label>
                        <div class="col-sm-8">


                            <select value="" style="width: 47.3rem" class="form-control" name="is_available">
                                <option value=""> Select Status</option>
                                <option value="yes"  selected >Available</option>
                                <option value="no"  selected >Unavailable</option>

                              </select>
                              @error("is_available")
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                        </div>

                </div>
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Category:</label>
                        <div class="col-sm-8">


                            <select value="" style="width: 47.3rem" class="form-control" name="category_id">
                            @foreach($cat as $value)
    
                            <option value="{{$value->id}}">{{$value->category_name}}</option>

                             @endforeach

                              </select>
                            
                        </div>

                </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Image:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="product_image">
                        </div>
                        @error("product_image")
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
            Products
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">

            <thead>


                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $val)

                <tr>
                    <th scope="row">{{$val->id}}</th>
                    <td>{{$val->product_name}}</td>
                    <td>{{$val->description}}</td>
                    <td>{{$val->price}}</td>
                    <td>{{$val->is_available}}</td>
                    <td><img src='{{asset("images/$val->product_image")}}' style="height: 100px ; width: 100px" >   </td>
                    <td>
                        <form method="post" action="/products/delete/{{$val->id}}">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
         <td>
               <button class="btn btn-primary">
            <a href="/products/edit/{{$val->id}}" style="text-decoration:none; color:white;" >Edit</a>
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
