<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactForm::create($data);

        // You can also add any additional logic here, such as sending an email notification.

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
