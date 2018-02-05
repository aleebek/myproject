<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
    
    public function getIndex() {
		$posts = Post::latest()->take(4)->get(); //orderBy('created_at','desc')
		return view('pages.welcome')->withPosts($posts);
	}
    
    public function getAbout() {
		$first = "Alex";
		$last = "Curtis";
		$full = $first . " " . $last; 	
		$email = "ali@qq.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;
		return view('pages.about')->with("fullname", $full)->with('email',$email)->withData($data);
	}
    
    public function getContact() {
        return view('pages.contact');
    }

	
}
