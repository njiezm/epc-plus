<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\NewsletterSubscriptionMail;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        // Validez les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'project_type' => 'required|string',
            'location' => 'required|string',
            'surface' => 'nullable|numeric',
            'description' => 'nullable|string',
            'rgpd' => 'accepted',
        ]);

        // Envoyer l'email à l'administrateur
        try {
            Mail::to('contact@epc-plus.com')->send(new ContactFormMail($validated));
            
            // Envoyer un email de confirmation au client
            Mail::to($validated['email'])->send(new \App\Mail\ContactConfirmationMail($validated));
            
            return redirect()->route('thank-you');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre demande. Veuillez nous contacter directement par téléphone.');
        }
    }

    public function subscribeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        try {
            // Envoyer une notification à l'administrateur
            Mail::to('contact@epc-plus.com')->send(new NewsletterSubscriptionMail($validated['email']));
            
            return redirect()->back()->with('newsletter_success', 'Vous êtes bien inscrit à notre newsletter !');
        } catch (\Exception $e) {
            return redirect()->back()->with('newsletter_error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }
}