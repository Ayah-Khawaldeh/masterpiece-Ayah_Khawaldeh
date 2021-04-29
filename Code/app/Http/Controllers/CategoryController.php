<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

    public function index()
    {
        $category= Category::all();
        return view('dash_theme.Mange_Categories', [
            "category" => $category
        ]);
    }
  
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
        $cat = Category::find($id)->products;
        $show = Category::find($id);
        return view('public_theme.Products', [
            'story'   => $cat,
            'show'    => $show

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
            'category_name'  => 'required',

        ]);

    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
        Category::create([
            "category_name"    => $request->category_name,
            "category_image"   => $filename,
        ]);
        return redirect("/Mange Categories");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryedit =Category::where("id", $id)->get()->first();
        return view("dash_theme.Edit_Categories",[
            "categoryedit" => $categoryedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
        Category::where("id",$id)->update([
            "category_name"    => $request->category_name,
            "category_image"   => $filename,
        ]);

        return redirect("/Mange Categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::where("id", $id)->delete();
        return redirect("/Mange Categories");
    }
}
