@extends('layouts.app')

@section('title', 'EPC + | Notre Démarche')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-blue-900">Notre Démarche</h2>
        <p class="text-slate-500 mt-2 text-lg">Découvrez comment nous accompagnons chaque projet pas à pas pour un résultat clair et efficace.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-16 items-center">
        {{-- Illustration schématique --}}
        <div class="space-y-8">
            <div class="flex items-start gap-6">
                <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">1</div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-1">Nous contacter pour vous rencontrer</h3>
                    <p class="text-slate-600 text-sm mb-2">
                        N’hésitez pas à laisser un SMS/WhatsApp avec votre nom, coordonnées et quelques infos sur votre projet.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-1">
                        <li>📞 Par téléphone : 0696 600 155</li>
                        <li>📧 Par mail : contact@epc-plus.fr</li>
                        <li>📝 Par formulaire : <a href="{{ route('contact') }}" class="text-orange-500 underline">Remplir le formulaire</a></li>
                    </ul>
                    <p class="text-sm text-slate-600 mt-2">
                        Un rendez-vous sera programmé selon vos disponibilités. Rencontrer nos experts est primordial pour comprendre et adapter notre réponse à votre projet.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-6">
                <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">2</div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-1">Accepter notre proposition</h3>
                    <p class="text-slate-600 text-sm">
                        Un devis adapté à votre projet vous sera communiqué. Une fois validé par vos soins, nous nous mettons au travail. Un interlocuteur unique vous accompagnera tout au long du processus.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-6">
                <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">3</div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-1">Constituer votre dossier et vous en informer</h3>
                    <p class="text-slate-600 text-sm">
                        Nous préparons votre dossier et vous informons de chaque avancée. Vous pourrez visualiser et valider les pièces à chaque étape.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-6">
                <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">4</div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-1">Transmettre et suivre votre dossier</h3>
                    <p class="text-slate-600 text-sm">
                        Nous transmettons votre dossier aux services de la mairie et assurons le suivi. La patience est de rigueur, et en cas de réclamation, nous intervenons gratuitement pour résoudre la situation.
                    </p>
                </div>
            </div>
        </div>

        {{-- Objectifs percutants --}}
        <div class="space-y-12">
            <div class="bg-blue-50 p-8 rounded-3xl shadow-lg text-center">
                <h3 class="text-xl font-bold text-blue-900 mb-2">Objectif Étape 1</h3>
                <p class="text-slate-600">Comprendre vos besoins pour adapter notre offre et garantir la réussite de votre projet dès le départ.</p>
            </div>
            <div class="bg-blue-50 p-8 rounded-3xl shadow-lg text-center">
                <h3 class="text-xl font-bold text-blue-900 mb-2">Objectif Étape 2</h3>
                <p class="text-slate-600">Valider ensemble un plan clair et précis pour avancer sans mauvaises surprises.</p>
            </div>
            <div class="bg-blue-50 p-8 rounded-3xl shadow-lg text-center">
                <h3 class="text-xl font-bold text-blue-900 mb-2">Objectif Étape 3</h3>
                <p class="text-slate-600">Assurer la conformité du dossier et votre satisfaction à chaque étape.</p>
            </div>
            <div class="bg-blue-50 p-8 rounded-3xl shadow-lg text-center">
                <h3 class="text-xl font-bold text-blue-900 mb-2">Objectif Étape 4</h3>
                <p class="text-slate-600">Garantir un dépôt et un suivi en mairie sans stress, avec notre expertise pour gérer toutes les complications.</p>
            </div>
        </div>
    </div>

    <div class="mt-16 text-center">
        <a href="{{ route('contact') }}" class="btn-primary text-white px-6 py-3 rounded-xl font-bold text-lg">
            Contactez-nous pour démarrer
        </a>
    </div>
</div>
@endsection

@push('styles')
<style>
    .btn-primary {
        background-color: #f97316;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.4);
    }
</style>
@endpush