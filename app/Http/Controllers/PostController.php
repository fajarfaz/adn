<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Post, Tag};
use Auth;
Use Alert;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('Blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags       = Tag::all();
        return view('Blog.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title"     => "required|unique:posts,title",
            "cover"     => "required",
            "desc"      => "required",
            "category"  => "required",
            "tags"      => "array|required",  
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);
        $post               = new Post();

        $cover              = $request->file('cover');
        if($cover){
            $fileName = \Str::slug($request->title).'.'.$cover->getClientOriginalExtension();
            $cover_path     = $cover->storeAs('images/blog', $fileName, 'public');
            $post->cover    = $cover_path;
        }
        $post->title        = $request->title;
        $post->slug         = \Str::slug($request->title);
        $post->user_id      = Auth::user()->id;
        $post->category_id  = $request->category;
        $post->desc         = $request->desc;
        $post->keywords     = $request->keywords;
        $post->meta_desc    = $request->meta_desc;
        $post->save();

        $post->tags()->attach($request->tags);

        //alert success
        Alert::success('Post Added Successfully', 'New Post added.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('slug', $id)->with('tags','category')->first();
        return view('Blog.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('slug',$id)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('Blog.posts.edit',compact('post','categories','tags'));
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
        $post = Post::where('slug',$id)->first();

        $this->validate($request, [
            "title"     => "required|unique:posts,title,".$post->id,
            "desc"      => "required",
            "category"  => "required",
            "tags"      => "array|required",  
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);


        $new_cover = $request->file('cover');

        if($new_cover){
            if($post->cover && file_exists(storage_path('app/public/' . $post->cover))){
                \Storage::delete('public/'. $post->cover);
            }

            $new_cover_path = $new_cover->store('images/blog', 'public');

            $post->cover = $new_cover_path;
        }

        $post->title        = $request->title;
        $post->slug         = \Str::slug($request->title);
        $post->user_id      = Auth::user()->id;
        $post->category_id  = $request->category;
        $post->desc         = $request->desc;
        $post->keywords     = $request->keywords;
        $post->meta_desc    = $request->meta_desc;
        $post->save();

        $post->tags()->sync($request->tags);

        //alert success
        Alert::success('Post Updated Successfully', $post->title.' Post updated.');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('slug',$id)->first();

        $post->delete();

        //alert success
        Alert::success('Post moved to trash', 'Post moved.');
        return redirect()->route('posts.index');
    }


    public function trash(){
        $posts = Post::onlyTrashed()->get();

        return view('Blog.posts.index_trash', compact('posts'));
    }

    public function restore($slug) {
        $post = Post::withTrashed()->where('slug',$slug)->first();

        if ($post->trashed()) {
            $post->restore();
            return redirect()->back()->with('success','Data successfully restored');
        }else {
            return redirect()->back()->with('error','Data is not in trash');
        }
    }

    public function deletePermanent($id){
        
        $post = Post::withTrashed()->findOrFail($id);

        if (!$post->trashed()) {
        
            return redirect()->back()->with('error','Data is not in trash');
        
        }else {
        
            $post->tags()->detach();
            

            if($post->cover && file_exists(storage_path('app/public/' . $post->cover))){
                \Storage::delete('public/'. $post->cover);
            }

        $post->forceDelete();

        return redirect()->back()->with('success', 'Data deleted successfully');
        }
    }
}
