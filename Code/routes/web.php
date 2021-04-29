<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});




/// Public_Theme ///
Route::get('/About_Us', function () {
    return view('public_theme.About_us');
});
Route::get('/Books', function () {
    return view('public_theme.Books');
});

// Route::get('/Checkout', function () {
//     return view('public_theme.Checkout');
// });

Route::get('/Electrical', function () {
    return view('public_theme.Electrical');
});
Route::get('/error', function () {
    return view('public_theme.error');
});
Route::get('/Houseware', function () {
    return view('public_theme.Houseware');
});
Route::get('/blog1', function () {
    return view('public_theme.Blog1');
});
Route::get('/blog2', function () {
    return view('public_theme.Blog2');
});
Route::get('/blog3', function () {
    return view('public_theme.Blog3');
});




// Route::get('/Profile', function () {
//     return view('public_theme.Profile');
// });

// Route::get('/Edit_Profile', function () {
//     return view('public_theme.Edit_Profile');
// });

Auth::routes();




/// Dash_Theme ///



//Users
// Route::get('/Users',"UserController@showuser");
// Route::delete("/users/delete/{id}","UserController@destroyuser");
// Route::get('/Account/{id}',"UserController@profile");
// Route::get('/Account', function () {
//     return view('public_theme.My_Account');
// });
// Route::get('/Account/{id}',"UserController@index");




//Mange Products
Route::get('/Mange Products',"ProductController@show")->middleware('auth:admin');
Route::post("products/store","ProductController@store")->middleware('auth:admin');
Route::delete("/products/delete/{id}","ProductController@destroy")->middleware('auth:admin');
Route::get("/products/edit/{id}","ProductController@edit")->middleware('auth:admin');
Route::put("/products/update/{id}","ProductController@update")->middleware('auth:admin');
Route::get('/public',"ProductController@public");//public
Route::get("/single/{id}", "ProductController@single");//public
Route::get("/shop", "ProductController@shop");//public
//Mange Categories
Route::get('/Mange Categories',"CategoryController@index")->middleware('auth:admin');
Route::post("categories/store","CategoryController@store")->middleware('auth:admin');
Route::delete("/categories/delete/{id}","CategoryController@destroy")->middleware('auth:admin');
Route::get("/categories/edit/{id}","CategoryController@edit")->middleware('auth:admin');
Route::put("/categories/update/{id}","CategoryController@update")->middleware('auth:admin');
Route::get("/cat/show/{id}", "CategoryController@single");//public

// Mange Users
// Route::get('/Mange Users',"UserController@index");
// Route::post("users/store","UserController@store");
// Route::delete("/users/delete/{id}","UserController@destroy");
// Route::get("/users/edit/{id}","UserController@edit");
// Route::put("/users/update/{id}","UserController@update");

//user
Route::get('/Users',"UserController@show")->middleware('auth:admin');
Route::delete('/user/delete/{id}',"UserController@delete")->middleware('auth:admin');
Route::get('/profile',"UserController@profile")->middleware('auth:web');
Route::get("/user/edit/{id}", "UserController@edit");
Route::put("/user/update/{id}", "UserController@update");

//contact us
Route::get('/Contact_Us',"ContactController@show");//public
Route::post("/contact/store","ContactController@store");//public
Route::get('/thanks',"ContactController@thanks");//public
Route::get('/Contact',"ContactController@showAdmin")->middleware('auth:admin');




//Mange Admins
Route::get('/Mange Admins',"AdminController@index")->middleware('auth:admin');
Route::post("admins/store","AdminController@store")->middleware('auth:admin');
Route::delete("/admins/delete/{id}","AdminController@destroy")->middleware('auth:admin');
Route::get("/admins/edit/{id}","AdminController@edit")->middleware('auth:admin');
Route::put("/admins/update/{id}","AdminController@update")->middleware('auth:admin');



//cart
Route::get('/Cart',"CartController@index")->middleware('auth:web');
Route::post('/cart-product',"CartController@create")->middleware('auth:web');
Route::delete('/cart/delete/{id}', 'CartController@destroy')->middleware('auth:web');
Route::get('/Checkout',"CartController@index1");

//checkout
Route::post('/placeOrder',"CheckoutController@store")->middleware('auth:web');
Route::get('/check',"CheckoutController@show")->middleware('auth:web');
Route::get('/orders',"CheckoutController@adminshow")->middleware('auth:admin');

Route::prefix('admin')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loginaaa', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get("/", "AdminController@index1")->name('admin.dashboard');
});


