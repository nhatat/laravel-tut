<?php
namespace App\Http\Controllers;
/**
* 
*/
class PagesController extends Controller
{
	# include static pages
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function getIndex() {
		return view('static.welcome');
	}

	public function getAbout() {
		return view('static.about');
	}

	public function getContact() {
		return view('static.contact');
	}
}

