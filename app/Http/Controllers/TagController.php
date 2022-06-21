<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
Use Alert;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('Blog.tags.index',['tags'=> $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.tags.create');
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
            'name' => 'required|unique:blog_tags',
            'keywords' => 'required',
            'meta_desc' => 'required'
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = \Str::slug($request->name);
        $tag->keywords = $request->keywords;
        $tag->meta_desc = $request->meta_desc;
        $tag->save();

        //alert success
        Alert::success('Added Successfully', 'New Tag added.');
        return redirect()->route('tags.index');
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
        $tag = Tag::findOrFail($id);
        return view('Blog.tags.edit',compact('tag'));
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
        $tag = Tag::findOrFail($id);

        #validation
        if ($request->name == $tag->name) {
            $this->validate($request,[
                'name' => 'required',
                'keywords' => 'required',
                'meta_desc' => 'required'
            ]);
        }
        else{
            $this->validate($request,[
                'name' => 'required|unique:blog_tags',
                'keywords' => 'required',
                'meta_desc' => 'required'
            ]);
            $tag->name = $request->name;
        }
        #update data
        $tag->name = $request->name;
        $tag->slug = \Str::slug($request->name);
        $tag->keywords = $request->keywords;
        $tag->meta_desc = $request->meta_desc;
        $tag->save();
        
        //alert success
        Alert::success('Update Successfully', $tag->name.' updated.');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tag = Tag::findOrFail($id);
        $Tag->delete();
        
        //alert success
        Alert::success('Delete Successfully', 'Tags deleted.');
        return redirect()->route('tags.index');
    }
}
