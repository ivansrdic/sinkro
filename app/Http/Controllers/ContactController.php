<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Input;

class ContactController extends Controller {

	public function index() {
		/*$host = "sinkro.hr";
	    $port = "8000";
	    $checkconn = fsockopen($host, $port, $errno, $errstr, 5);
	    if(!$checkconn){
	        echo "($errno) $errstr";
	    } else {
	        echo 'ok';
	    }*/

		return view('contact');
	}

	public function sendMail() {
		$result = Mail::raw(
			"Ime: " . Input::get('name') . "\n".
			"E-mail: " . Input::get('email') . "\n".
			((Input::get('phone'))?("Broj telefona: " . Input::get('phone') . "\n"):("")).
			((Input::get('company'))?("Ime tvrtke: " . Input::get('company') . "\n"):("")).
			"\n".
			Input::get('message'), function ($message) {
			$message->to("info@sinkro.hr");
			$message->replyTo(Input::get('email'), Input::get('name'));
			$message->subject(Input::get('subject'));
		});
		$response = array();
		$response['status'] = $result;
		if($response['status'] > 0) {
			$response['message'] = "Poruka uspješno poslana.";
			return $response;
		} else {
			$response['message'] = "Greška prilikom slanja, molimo pokušajte ponovno.";
			return $response;
		}
	}

}