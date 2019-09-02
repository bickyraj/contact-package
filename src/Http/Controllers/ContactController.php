<?php

namespace Bicky\Contact\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Bicky\Contact\Models\Contact;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request)
	{
		Mail::to(config('contact.send_email_to'))->send();
	}
}