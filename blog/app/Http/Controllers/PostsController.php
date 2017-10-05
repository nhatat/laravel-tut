<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
    	return view('posts.index');
    }

    public function show() {
    	return view('posts.show');
    }

    public function create() {
    	return "this is create form, I will should add in a future";
    }

    public function update() {
    	return "this is method to update a post";
    }

    public function delete() {
    	return "this is method to delete a post";
    }


}
