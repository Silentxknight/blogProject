<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // $posts = Post::all();
        $posts=Post::orderBy('created_at','desc')->get();
        return view('posts/index')->with('data',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req ->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        // saving to database
        $post=new Post;
        $post->title=$req -> title;
        $post->body=$req ->body;
        $post->user_id=auth()->user()->id;
        $post->save();


        return redirect('posts/')->with('msgSuc','Congo! Posted');
        // -> with(['msg','Congo You have Posted Your Post!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->with('data',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $post=Post::find($id);
        return view('posts.edit')->with('data',$post);

        // $postedit=new Post;
        // $postedit=Post::findOrfail($id);

        // if($postedit){
        //     return view('posts.edit')-> with();

        // }
        // else{
        //     return ('/ere');
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $validatedData = $req ->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        // saving to database
        $post=Post::find($id);
        $post->title=$req -> title;
        $post->body=$req ->body;
        $post->save();


        return redirect('posts/')->with('msgSuc','Congo! Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postDel=Post::find($id);
        $postDel->delete();

        return redirect('posts/')->with('msgSuc',' Post Deleted!');
    }



}
