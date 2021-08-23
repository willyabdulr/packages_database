<?php

namespace Example\App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Example\App\Models\ContactForm;

class ContactFormController extends Controller {

    public function index()
    {
       return view('app::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'))->with(['status' => 'Thank you, your mail has been sent successfully.']);

    }
    


}