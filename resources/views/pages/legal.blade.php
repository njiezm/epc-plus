@extends('layouts.app')

@section('title', 'EPC + | Mentions Légales')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-4xl font-extrabold text-blue-900 mb-8">Mentions Légales</h1>
    
    <div class="prose prose-slate max-w-none space-y-8">
        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Éditeur du site</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p><strong>NJIEZM.FR - N'jie ZAMON</strong></p>
                <p>Siège social : le Robert, Martinique<br>
                97231 Le Robert, Martinique</p>
                <p>Téléphone : +596 696 70 39 22</p>
                <p>Email : contact@njiezm.fr</p>
                <p>SIRET : 999 396 120 00019</p>
                <p>Forme juridique :  EI</p>
                <p>Capital social : 100 €</p>
                <p>Responsable de la publication : N'jie ZAMON</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Hébergement</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p><strong>SAS o2switch</strong></p>
                <p>2 rue Kellermann<br>
                59100 Roubaix, France</p>
                <p>Téléphone : 1007</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Propriété intellectuelle</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
                <p class="mt-4">La reproduction de tout ou partie de ce site sur un support électronique quel qu'il soit est formellement interdite sauf autorisation expresse du directeur de la publication.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Cookies</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Le site epc-plus.fr peut être amené à vous demander l'acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookie est un fichier déposé sur votre ordinateur permettant de reconnaître votre navigateur lors de vos visites.</p>
                <p class="mt-4">Vous avez la possibilité de désactiver les cookies depuis les paramètres de votre navigateur.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Données personnelles</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Conformément à la loi Informatique et Libertés du 6 janvier 1978 modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent. Vous pouvez exercer ce droit en nous contactant via le formulaire de contact.</p>
                <p class="mt-4">Aucune information personnelle n'est publiée à l'insu de l'utilisateur, ni échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.</p>
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