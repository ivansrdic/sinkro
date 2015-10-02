<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Input;

class ContactController extends Controller {

	public function index() {
		return view('contact');
	}

	public function sendMail() {
		Mail::raw(Input::get('message'), function ($message) {
			$message->to("kontakt@ivansrdic.me");
			$message->replyTo(Input::get('email'), Input::get('name'));
			$message->subject(Input::get('subject'));
		});
	}

}