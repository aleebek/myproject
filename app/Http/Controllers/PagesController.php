<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex() {
		return view('pages.welcome');
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
