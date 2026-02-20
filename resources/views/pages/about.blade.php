@extends('layouts.app')

@section('title', 'EPC + | À Propos')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <div class="grid lg:grid-cols-2 gap-20 items-center">
        <div>
            <h2 class="text-4xl font-extrabold text-blue-900 mb-6">À propos d'<span class="text-orange-500">EPC+</span></h2>
            <p class="text-slate-600 mb-6">
                EPC+ est le pôle spécialisé dans le montage et l'accompagnement des dossiers d'urbanisme du groupe BATI PRO PLUS. Nous nous concentrons sur une mission : simplifier les démarches administratives de construction pour les particuliers et professionnels aux Antilles.
            </p>
            <p class="text-slate-600 mb-6">
                Notre équipe d'experts connaît les spécificités réglementaires de la Martinique et de la Guadeloupe, pas la maîtrise des Plans Locaux d'Urbanisme (PLU) et des contraintes propres à chaque territoire pour garantir le succès de votre projet.
            </p>

             <p class="text-slate-600 mb-6">
                <strong>Notre objectif : 100% de clients satisfaits, de projets réalisés. </strong>
            </p>
            <!--div class="grid grid-cols-2 gap-6 mb-8">
                <div>
                    <p class="text-3xl font-bold text-orange-500">300+</p>
                    <p class="text-sm text-slate-500">Projets réalisés</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-orange-500">98%</p>
                    <p class="text-sm text-slate-500">Taux de réussite</p>
                </div>
            </!--div-->
            <a href="{{ route('contact') }}" class="btn-primary text-white px-6 py-3 rounded-xl font-bold">
                Notre équipe
            </a>
           
             <ul class="space-y-4 text-sm mt-6">
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Des techniciens, véritables experts de terrain en urbanisme</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Des dessinateurs, pour formaliser votre projet</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Des experts du BTP pour s'assurer de la réalité technique de vos projets</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Des gestionnaires pour le montage et le suivi de votre dossier</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Un solide réseau (bureau d'études & architectes)</span>
                        <i class="fas fa-plus"></i>
                    </li>
                </ul>
        </div>
        <div>
            <img src="https://static.vousfinancer.com/medias/actualites/AdobeStock_5757586.jpeg" alt="Notre équipe" class="rounded-2xl shadow-xl">
        </div>
    </div>

    <div class="mt-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-blue-900">Nos Valeurs</h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Confiance</h3>
                <p class="text-sm text-slate-600">Nous construisons une relation de transparence et de fiabilité avec chaque client.</p>
            </div>
            <div class="text-center">
                <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-orange-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Réactivité</h3>
                <p class="text-sm text-slate-600">Nous respectons les délais et assurons un suivi régulier de votre dossier.</p>
            </div>
            <div class="text-center">
                <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-award text-green-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Expertise</h3>
                <p class="text-sm text-slate-600">Notre connaissance fine des réglementations locales garantit la réussite de vos projets.</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-purple-600 text-2xl"></i>
                </div>
                <h3 class="font-bold mb-2">Passion</h3>
                <p class="text-sm text-slate-600">Nous aimons notre travail et mettons tout notre cœur à concrétiser vos projets.</p>
            </div>
        </div>
    </div>

    <div class="mt-24 bg-slate-100 rounded-2xl p-12">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Rejoignez notre réseau de partenaires</h3>
                <p class="text-slate-600 mb-6">
                    Vous êtes architecte, constructeur, artisan ou professionnel de l'immobilier aux Antilles ? Rejoignez notre réseau pour collaborer sur des projets passionnants.
                </p>

                <a href="{{ route('contact') }}" class="btn-primary text-white px-6 py-3 rounded-xl font-bold">
                Devenir partenaire
            </a>

                <!--button class="btn-primary text-white px-6 py-3 rounded-xl font-bold">
                    Devenir partenaire
                </!--button-->
            </div>
            <div class="grid grid-cols-3 gap-4">
                <img src="https://www.signaletique-express.fr/5334-large_default/panneau-permis-de-construire-personnalisable.jpg" alt="Partenaire" class="rounded-lg">
                <img src="{{ asset('images/part.jpg') }}" alt="Partenaire" class="rounded-lg">
                <img src="{{ asset('images/134.jpg') }}" alt="Partenaire" class="rounded-lg">
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    :root {
        --primary-blue: #1e3a8a;
        --accent-orange: #f97316;
        --bg-light: #f8fafc;
        --tropical-green: #10b981;
    }

    body {
        font-family: 'Outfit', sans-serif;
        color: #1e293b;
    }

    .logo-text {
        font-weight: 800;
        letter-spacing: -1px;
    }

    .btn-primary {
        background-color: var(--accent-orange);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.4);
    }

    .card-shadow {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }

    .card-shadow:hover {
        border-color: var(--accent-orange);
        transform: scale(1.02);
    }

    .tropical-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 50C60 40 70 30 80 20C90 10 100 0 100 0C100 0 90 10 80 20C70 30 60 40 50 50Z' fill='%2310b981' fill-opacity='0.05'/%3E%3C/svg%3E");
    }
</style>
@endpush