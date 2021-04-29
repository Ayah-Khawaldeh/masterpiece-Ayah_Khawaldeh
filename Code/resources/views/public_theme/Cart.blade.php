@extends('layout.public.public_main')

@section('contant')

<main>

<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-inner text-center">
                    <h1>Your Cart</h1>
                    <div class="page__title-breadcrumb">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/public">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- Cart Area Strat-->
<section class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th  id="table" class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($x as $value)
                                <tr>

                                    <td class="product-thumbnail"><a href="product-details.html"><img src='/images/{{optional($value->product)->product_image}}' alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">{{optional($value->product)->product_name}}</a></td>
                                    <td class="product-price" id="qty"><span class="amount">{{optional($value->product)->special_price}}</span></td>
                                    <td class="product-price" id="price"><span class="amount">{{$value->product_qty}}</span></td>

                                    <!-- <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td> -->
                                    <td class="product-subtotal"><span class="amount"></span>{{optional($value->product)->special_price*$value->product_qty}}</td>
                                    <td class="product-remove">
                                    <!-- <a href="/cart/delete/{{$value->id}}"><i class="fa fa-times"></i></a> -->
                                    <form method="post" action="/cart/delete/{{$value->id}}">
									@method("DELETE")
									@csrf
									<input type="submit" value="delete" name="add-to-cart" class="btn btn-black" style="background-color:black;color:white">

									</form>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <span id="val"></span>
                    </div>

                    <div class="row">
                        <div class="col-12">
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul class="mb-20">
                                    <li >Subtotal <span>{{$total}}</span></li>

                                    <li >Total <span>{{$total}}</span></li>

                                </ul>
                                <a class="os-btn" href="/Checkout">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Cart Area End-->
</main>
@endsection
