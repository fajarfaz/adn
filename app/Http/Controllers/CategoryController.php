<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
Use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Blog.categories.index',['categories'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #validate request
        $this->validate($request,[
            'name' => 'required|unique:blog_categories',
            'keywords' => 'required',
            'meta_desc' => 'required'
        ]);
        #insert into database
        $category = new Category();
        $category->name = $request->name;
        $category->slug = \Str::slug($request->name);
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();
        //alert success
        Alert::success('Added Successfully', 'New Category added.');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Blog.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        #validation
        if ($request->name == $category->name) {
            $this->validate($request,[
                'name' => 'required',
                'keywords' => 'required',
                'meta_desc' => 'required'
            ]);
        }
        else{
            $this->validate($request,[
                'name' => 'required|unique:blog_categories',
                'keywords' => 'required',
                'meta_desc' => 'required'
            ]);
            $category->name = $request->name;
        }
        #update data
        $category->slug = \Str::slug($request->name);
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();
        
        //alert success
        Alert::success('Updated Successfully', $category->name.' updated.');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $message = $category->name.' deleted.';
        $category->delete();
        
        //alert success
        Alert::success('Deleted Successfully', $message);
        return redirect()->route('categories.index');
    }
}
