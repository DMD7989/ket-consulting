<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request, $locale)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'type' => ['required', 'in:contact,devis'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($data['type'] !== 'devis') {
            $data['service'] = null;
        }

        Mail::to('keytechnologie82@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', __('Votre demande a bien été envoyée.'));
    }
}
