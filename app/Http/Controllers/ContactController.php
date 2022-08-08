<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::find(1);
        return view('contact', compact('contact'));
    }
}
