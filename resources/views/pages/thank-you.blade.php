@extends('layouts.app')

@section('title', 'EPC + | Merci pour votre demande')

@section('content')
<div class="min-h-screen flex items-center justify-center py-20">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <div class="bg-white p-12 rounded-3xl card-shadow">
            <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-blue-900 mb-4">Merci pour votre confiance !</h1>
            <p class="text-slate-600 mb-8">
                Votre demande a bien été envoyée. Notre équipe vous contactera dans les plus brefs délais pour étudier votre projet.
            </p>
            <div class="bg-blue-50 p-6 rounded-xl mb-8">
                <p class="text-blue-900 font-bold mb-2">Prochaines étapes</p>
                <ol class="text-left text-sm text-slate-600 space-y-2">
                    <li>1. Réception de votre demande par notre équipe</li>
                    <li>2. Analyse de votre projet et de sa faisabilité</li>
                    <li>3. Contact téléphonique sous 24-48h pour échanger sur vos besoins</li>
                    <li>4. Envoi d'un devis personnalisé et détaillé</li>
                </ol>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="btn-primary text-white px-6 py-3 rounded-xl font-bold">
                    Retour à l'accueil
                </a>
                <a href="{{ route('services') }}" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-xl font-bold hover:bg-slate-200 transition-colors">
                    Découvrir nos services
                </a>
            </div>
        </div>
        
        <div class="mt-8 text-sm text-slate-500">
            <p>Une question ? Appelez-nous directement au <a href="tel:0696600155" class="text-orange-500 font-bold">0696 60 01 55</a></p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-shadow {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        border: 1px solid #e2e8f0;
    }
</style>
@endpush