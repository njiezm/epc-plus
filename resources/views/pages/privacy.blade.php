@extends('layouts.app')

@section('title', 'EPC + | Politique de Confidentialité')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-4xl font-extrabold text-blue-900 mb-8">Politique de Confidentialité</h1>
    
    <div class="prose prose-slate max-w-none space-y-8">
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-xl">
            <p class="text-blue-800"><strong>Dernière mise à jour :</strong> {{ date('d/m/Y') }}</p>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">1. Collecte des données personnelles</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Les données personnelles collectées sur notre site sont les suivantes :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Nom et prénom</li>
                    <li>Adresse email</li>
                    <li>Numéro de téléphone</li>
                    <li>Adresse du projet</li>
                    <li>Informations sur le projet de construction</li>
                </ul>
                <p class="mt-4">Ces données sont collectées uniquement lorsque vous remplissez le formulaire de contact ou de demande de devis.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">2. Utilisation des données</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Vos données personnelles sont utilisées pour :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Répondre à vos demandes de devis et d'informations</li>
                    <li>Vous fournir un suivi personnalisé de votre projet</li>
                    <li>Vous envoyer notre newsletter (uniquement si vous y avez souscrit)</li>
                    <li>Améliorer nos services</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">3. Partage des données</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Nous ne partageons vos données personnelles avec des tiers que dans les cas suivants :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Avec votre consentement explicite</li>
                    <li>Pour les besoins de réalisation de votre projet (partenaires architectes, constructeurs)</li>
                    <li>Si la loi l'exige ou pour protéger nos droits</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">4. Sécurité des données</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Nous mettons en œuvre toutes les mesures techniques et organisationnelles appropriées pour protéger vos données personnelles contre la perte, l'accès non autorisé ou la divulgation.</p>
                <p class="mt-4">Notre site utilise le protocole HTTPS pour sécuriser la transmission de vos données.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">5. Vos droits</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li><strong>Droit d'accès :</strong> connaître les données que nous détenons sur vous</li>
                    <li><strong>Droit de rectification :</strong> corriger les données inexactes</li>
                    <li><strong>Droit d'effacement :</strong> demander la suppression de vos données</li>
                    <li><strong>Droit de limitation :</strong> limiter le traitement de vos données</li>
                    <li><strong>Droit de portabilité :</strong> recevoir vos données dans un format lisible</li>
                    <li><strong>Droit d'opposition :</strong> vous opposer au traitement de vos données</li>
                </ul>
                <p class="mt-4">Pour exercer ces droits, contactez-nous à l'adresse : contact@epc-plus.fr</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">6. Conservation des données</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Vos données sont conservées le temps nécessaire pour répondre à votre demande et assurer un suivi optimal de votre projet. Au-delà, elles sont archivées ou supprimées selon les obligations légales.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">7. Contact</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Pour toute question concernant cette politique de confidentialité, vous pouvez nous contacter :</p>
                <p class="mt-4">Par email : <a href="mailto:contact@epc-plus.fr" class="text-orange-500">contact@epc-plus.fr</a><br>
                Par téléphone : <a href="tel:0696600155" class="text-orange-500">0696 60 01 55</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .prose {
        color: #334155;
    }
    .prose h2 {
        color: #1e3a8a;
        font-weight: 700;
    }
    .prose p {
        margin-bottom: 1rem;
    }
</style>
@endpush