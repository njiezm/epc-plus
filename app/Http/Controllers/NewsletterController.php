<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscriptionMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        try {
            // Envoyer une notification à l'administrateur
            Mail::to('contact@epc-plus.fr')->send(new NewsletterSubscriptionMail($validated['email']));
            
            return redirect()->back()->with('newsletter_success', 'Vous êtes bien inscrit à notre newsletter !');
        } catch (\Exception $e) {
            return redirect()->back()->with('newsletter_error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }
}