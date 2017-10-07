<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
    	return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $article = Post::find($id);
    	return view('posts.show', compact('article'));
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
