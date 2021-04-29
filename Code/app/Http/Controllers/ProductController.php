<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function show()
    {
        $cat=Category::all();
        $product= Product::all();
        return view('dash_theme.Mange_Products', [
            "product" => $product,
            "cat"     =>$cat
        ]);
    }


    public function public()
    {
       $cat=Category::all();
       $product= Product::latest()->take(5)->get();
        return view('public_theme.public', [
            "prod" => $product,
            "cat"     =>$cat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $product= Product::all();
        return view('public_theme.shop', [
            "product" => $product,
           
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateRequest($request)
    {
        $request->validate([
            'product_name'     => 'required',
            'description'  => 'required',
            'price'     => 'required',
            'is_available'     => 'required',
            'special_price'=>"required"
        ]);

    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
        Product::create([
            "product_name"    => $request->product_name,
            "description"     => $request->description,
            "price"           => $request->price,
            "special_price"   =>$request->special_price,
            "is_available"    => $request->is_available,
            "product_image"   => $filename,
            'category_id'    => $request->category_id,
        ]);
        return redirect("/Mange Products");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
       
        $all = Product::latest()->take(4)->get();
        $prod = Product::find($id);
        $cat = Product::find($id)->Category;
        
        return view('public_theme.Single_prodact', [
            'prod'   => $prod,
            'all'    => $all,
            'cat'    =>$cat

        ]);
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productedit =Product::where("id", $id)->get()->first();
        return view("dash_theme.Edit_Products",[
            "productedit" => $productedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
            Product::where("id",$id)->update([
            "product_name"    => $request->product_name,
            "description"     => $request->description,
            "price"           => $request->price,
            "special_price"   =>$request->special_price,
            "is_available"    => $request->is_available,
            "product_image"   => $filename,
        ]);


        return redirect("/Mange Products");
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

        public function destroy($id)
        {
            $product= Product::where("id", $id)->delete();
            return redirect("/Mange Products");
        }    }

