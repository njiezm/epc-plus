@extends('layouts.app')

@section('title', 'EPC + | Conditions Générales de Vente')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-4xl font-extrabold text-blue-900 mb-8">Conditions Générales de Vente</h1>
    
    <div class="prose prose-slate max-w-none space-y-8">
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-xl">
            <p class="text-blue-800"><strong>Dernière mise à jour :</strong> {{ date('d/m/Y') }}</p>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 1 : Objet</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Les présentes conditions générales de vente (CGV) régissent les prestations de services proposées par la société EPC + - Pôle Bati Pro Plus, ci-après dénommée "EPC+".</p>
                <p class="mt-4">Toute commande de prestations auprès d'EPC+ vaut acceptation par le client des présentes CGV.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 2 : Prestations proposées</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>EPC+ propose les prestations suivantes :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Étude de faisabilité (vérification PLU et PPRN)</li>
                    <li>Constitution de dossiers de permis de construire</li>
                    <li>Constitution de dossiers de déclaration préalable de travaux</li>
                    <li>Suivi administratif auprès des services d'urbanisme</li>
                    <li>Prestations complémentaires (études financières, mise en relation partenaires)</li>
                    <li>Études d'aménagement intérieur</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 3 : Devis</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Tout devis émis par EPC+ est valable pour une durée de 3 mois à compter de sa date d'émission.</p>
                <p class="mt-4">Le devis détaillé précise :</p>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>La nature exacte des prestations</li>
                    <li>Le prix détaillé en euros TTC</li>
                    <li>Les délais prévisionnels</li>
                    <li>Les conditions de paiement</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 4 : Prix</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Les prix sont exprimés en euros TTC et comprennent l'ensemble des prestations décrites au devis.</p>
                <p class="mt-4">Les frais de déplacement sur site sont inclus dans les tarifs pour la Martinique, la Guadeloupe et la Guyane.</p>
                <p class="mt-4">EPC+ se réserve le droit de modifier ses tarifs à tout moment, les prix applicables étant ceux en vigueur à la date de signature du devis.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 5 : Modalités de paiement</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Le paiement s'effectue selon les modalités suivantes :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li><strong>30% à la commande</strong> : acompte à la signature du devis</li>
                    <li><strong>40% à la mi-parcours</strong> : lors de la constitution complète du dossier</li>
                    <li><strong>30% à la fin</strong> : au dépôt du dossier en mairie</li>
                </ul>
                <p class="mt-4">Les paiements s'effectuent par virement bancaire, chèque ou carte bancaire.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 6 : Délais d'exécution</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Les délais indiqués sont donnés à titre indicatif et dépendent des délais d'instruction des services d'urbanisme.</p>
                <p class="mt-4">En général, comptez :</p>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>2 à 4 semaines pour la constitution complète du dossier</li>
                    <li>2 à 3 mois d'instruction pour un permis de construire</li>
                    <li>1 mois d'instruction pour une déclaration de travaux</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 7 : Obligations du client</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Le client s'engage à :</p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Fournir toutes les informations nécessaires à la réalisation de sa demande</li>
                    <li>Permettre l'accès au terrain pour les relevés nécessaires</li>
                    <li>Respecter les échéances de paiement</li>
                    <li>Informez EPC+ de tout changement concernant son projet</li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 8 : Responsabilité</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>EPC+ s'engage à réaliser les prestations avec diligence et selon les règles de l'art.</p>
                <p class="mt-4">La responsabilité d'EPC+ est limitée aux prestations effectivement fournies et ne peut être engagée en cas de refus du permis de construire par l'administration pour des motifs indépendants de la qualité du dossier.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 9 : Rétractation et annulation</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Conformément à l'article L221-18 du Code de la consommation, le client dispose d'un délai de 14 jours pour se rétracter sans avoir à justifier de motifs ni à payer de pénalités.</p>
                <p class="mt-4">Au-delà de ce délai, toute annulation entraînera le paiement des prestations déjà réalisées.</p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Article 10 : Litiges</h2>
            <div class="bg-white p-6 rounded-xl card-shadow">
                <p>Tout litige relatif à l'exécution des présentes CGV fera l'objet d'une recherche de solution amiable.</p>
                <p class="mt-4">À défaut d'accord amiable, le litige sera porté devant le tribunal compétent du lieu du siège social d'EPC+.</p>
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