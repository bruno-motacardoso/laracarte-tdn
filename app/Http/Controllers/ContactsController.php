<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    public function create(){

    	return view('contacts.create');
    }
    public function store(ContactRequest $request){

    	$msg = Message::create($request->only('name', 'email', 'message'));

    	$mailable = new ContactMessageCreated($msg);

    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	Flashy::message('Nous vous répondrons dans les plus brefs délais.', route('root_path'));

    	return Redirect::route('root_path');
    }
}
