<?php
namespace App\Http\Controllers;
/**
* 
*/
class PagesController extends Controller
{

	public function getIndex() {
		return view('static.welcome');
	}

	public function getAbout() {
		$firstName = 'Alex';
		$lastName = 'Curtis';
		$fullName = $firstName . " " . $lastName;
		$email = 'example@yolo.com';
		return view('static.about')-> with("fullName", $fullName)->withEmail($email);
	}

	public function getContact() {
		return view('static.contact');
	}

}
