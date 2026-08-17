<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request, $locale)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'type' => ['required', 'in:contact,devis,autre'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($data['type'] !== 'devis') {
            $data['service'] = null;
        }

        Lead::create($data);

        try {
            Mail::to(config('services.contact.mail_to'))->send(new ContactFormMail($data));
        } catch (\Throwable $e) {
            Log::error('Contact form email failed to send', ['exception' => $e->getMessage()]);
        }

        return back()->with('success', __('Votre demande a bien été envoyée.'));
    }
}
