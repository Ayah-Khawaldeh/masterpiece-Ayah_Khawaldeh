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
                        Update Products
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
                Update Products
            </div>
        </div>
        <div class="card-body">
            <div class="stepy-tab">

            </div>

            <form action="/products/update/{{$productedit->id}}" method="POST"   enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <fieldset title="Step1" class="step" id="default-step-0">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Product Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="product_name" value="{{$productedit->product_name}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Description:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Description" name="description" value="{{$productedit->description}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Price" value="{{$productedit->price}}" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm"> Special Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Price" value="{{$productedit->special_price}}" name="special_price">
                        </div>
                     

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Status:</label>
                        <div class="col-sm-8">


                            <select  style="width: 47.3rem" class="form-control" name="is_available" value="{{$productedit->is_available}}">
                                <option value=" Select Statu"> Select Status</option>
                                <option value="yes"  selected >Available</option>
                                <option value="no"  selected >Unavailable</option>


                              </select>
                        </div>

                </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Image:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" placeholder="image" name="product_image">
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
