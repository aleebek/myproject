<?php
// I built this with php artisan make:controller PostController --resource
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create variable and store all the blog posts in it from DB
		$posts = Post::all();
		
		// return a view and pass in the above variable
		return view('posts.index')->withPosts($posts);
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
    public function store(Request $request)
    {
        // validate the data
		$this->validate($request, array(
				'title' => 'required|max:191',
				'body' => 'required'
			));
		// store in the DB
		$post = new Post;
		
		$post->title = $request->title;
		$post->body = $request->body;
		
		$post->save();
		
		Session::flash('success', 'The blog post was successfully saved!');
		// 'flash' exists for one page request
		// 'put' exists until the session is removed
		
		// redirect to another page
		return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
		return view('posts.show')->withPost($post); //with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the DB and save as a variable
		$post = Post::find($id);
		
		// return the view and pass in the var we previously created
		return view('posts.edit')->withPost($post);
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
        // Validate the data
		$this->validate($request, array(
				'title' => 'required|max:191',
				'body' => 'required'
			));
		// Save the data to the database
		$post = Post::find($id);
		
		$post->title = $request->title;
		$post->body = $request->body;
		
		$post->save();		
		
		
		// set flash data with success message
		Session::flash('success', 'This post was successfully saved.');
		// redirect with flash data to posts.show
		return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
