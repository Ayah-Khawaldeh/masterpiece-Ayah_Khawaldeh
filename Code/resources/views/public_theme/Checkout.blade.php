@extends('layout.public.public_main')

@section('contant')


    <main>

        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Checkout</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/public">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Checkout</li>
                                </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- coupon-area start -->
        <section class="coupon-area pt-100 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>

                </div>
            </div>
        </section>
        <!-- coupon-area end -->
        <!-- checkout-area start -->
        <section class="checkout-area pb-70">
            <div class="container">
                <form action="/placeOrder" method="post">
                @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select  name="Country">
                                                <option value="Jordan">Jordan</option>
                                                @error("Country")
                                               <p style="color:red;">{{$message}}</p>
                                                @enderror
                                                <!-- <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="FirstName"/>
                                            @error("FirstName")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="LastName" />
                                            @error("LastName")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City" name="City" />
                                            @error("City")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address"name="Address" />
                                            @error("Address")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="" name="email" />
                                            @error("email")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="phone" />
                                            @error("phone")
                                             <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">


                                    </div>
                                </div>
                                <div class="different-address">
                                    {{-- <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input id="ship-box" type="checkbox" />
                                        </h3>
                                    </div> --}}
                                    <div id="ship-box-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        {{-- <div class="checkout-form-list">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="your-order mb-30 ">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">{{$total}}</span></td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">{{$total}}</span></strong>
                                                </td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>payment</th>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="payment" />
                                                            @error("payment")
                                                            <p style="color:red;">{{$message}}</p>
                                                            @enderror
                                                            <label>
                                                            Handcash
                                                            </label>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method">



                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="os-btn os-btn-black">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area end -->
    </main>

@endsection
