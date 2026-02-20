@extends('layouts.app')

@section('title', 'EPC + | Nos Prestations')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <div class="mb-16">
        <h2 class="text-4xl font-extrabold text-blue-900">Nos Prestations</h2>
        <p class="text-slate-500 mt-2">Des solutions adaptées à chaque étape de votre projet.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12">
        <div class="bg-white p-10 card-shadow rounded-3xl border-t-8 border-t-orange-500">
            <h3 class="text-2xl font-bold mb-6 flex justify-between items-center">
                Prestation de Base
                <span class="text-sm font-normal text-slate-400">Projets < 150m²</span>
            </h3>
            <div class="grid md:grid-cols-2 gap-4 mb-8">
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> <b>Vérification PLU & PPRN</b></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI1 : Plans de situation</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI2 : Plans de masse</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI3 : Plans de coupes</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI4 : Notice Architechturale</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI5 : Plans de façades et de toiture</li>
                </ul>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI6 : Documents Graphiques</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> PCMI7/PCMI8 : Photographies</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> Annexe : Plans de niveau</li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> <b>Cerfa complet</b></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> <b>Attestation RE2020 (Déport PC)</b></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check text-green-500 mt-1"></i> <b>Dépot du dossier en mairie</b></li>
                </ul>
            </div>
            <div class="bg-slate-50 p-6 rounded-xl">
                <h4 class="font-bold text-blue-900 mb-4 uppercase text-xs">Le + Service Inclus :</h4>
                <ul class="text-sm space-y-2">
                    <li>• Certificats d'urbanisme (information ou opérationnel)</li>
                    <li>• Déplacements sur site (relevé & photos)</li>
                    <li>• Dépôt en mairie par nos soins</li>
                    <li>• Suivi et réponses aux demandes</li>
                    <li>• <b>Panneau de PC offert</b></li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <p class="text-3xl font-bold text-blue-900">À partir de <span class="text-orange-500">990€ TTC</span></p>
                <p class="text-xs text-slate-500 mt-2">Tarif pour une maison individuelle < 150m²</p>
            </div>
            <div class="mt-7 bg-blue-50 border border-blue-100 p-6 rounded-2xl text-center">
    <h4 class="text-lg font-bold text-blue-900 mb-2">
        Un accompagnement clé en main
    </h4>
    <p class="text-sm text-slate-600 mb-4 max-w-md mx-auto">
        Découvrez comment EPC + transforme la démarche “paperasse” de votre
projet en une expérience zen.  
Fini les tracas: nous prenons en charge l'intégralité de votre permis de
construire, le dépôt en mairie et le suivi.
    </p>
    <p class="text-sm text-slate-600 mb-4 max-w-md mx-auto">

    Et ce n'est pas tout : si la mairie demande des pièces complémentaires ou
une modification, nous reprenons votre dossier gratuitement, sans frais
supplémentaires.
 </p>
    <div class="flex flex-col sm:flex-row gap-3 justify-center">
        <a href="{{ route('contact') }}" 
           class="btn-primary text-white px-6 py-3 rounded-xl font-semibold text-sm">
            Demander un devis gratuit
        </a>
        <a href="tel:+590XXXXXXXXX" 
           class="bg-white border border-blue-200 text-blue-900 px-6 py-3 rounded-xl font-semibold text-sm hover:bg-blue-100 transition">
            Être rappelé
        </a>
    </div>

    <p class="text-xs text-slate-400 mt-4">
        Réponse sous rapide • Étude personnalisée • Sans engagement
    </p>
</div>
        </div>

        <div class="space-y-6">
            <div class="bg-blue-900 text-white p-8 rounded-3xl">
                <h3 class="text-xl font-bold mb-4">Prestations Complémentaires</h3>
                <ul class="space-y-4 text-sm text-blue-100">
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Étude financière & Devis prévisionnel</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Mise en relation constructeurs / Archi</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Déclaration d'ouverture de chantier</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Études réglementaires (Sol, etc.)</span>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li class="flex justify-between border-b border-white/10 pb-2">
                        <span>Reprise du dossier de PC établi par vos soins</span>
                        <i class="fas fa-plus"></i>
                    </li>
                </ul>
            </div>
            <div class="bg-orange-100 border border-orange-200 p-8 rounded-3xl">
                <div class="flex items-center gap-4 mb-4">
                    <div class="bg-orange-500 text-white p-3 rounded-xl"><i class="fas fa-couch text-xl"></i></div>
                    <h3 class="text-xl font-bold text-orange-900">Notre "+" Exclusif</h3>
                </div>
                <p class="text-sm text-orange-800">
                    Études d'<b>aménagement intérieur</b> et de <b>décoration</b>. Transformez l'essai : de l'autorisation d'urbanisme au design de votre futur cocon.
                </p>
                <a href="{{ route('contact') }}" class="mt-6 text-orange-600 font-bold text-sm underline">Nous consulter</a>
            </div>
            
            <!-- Ajout d'une carte des zones d'intervention -->
            <div class="bg-white p-8 rounded-3xl card-shadow">
                <h3 class="text-xl font-bold mb-4 text-blue-900">Notre zone d'intervention</h3>
                <div class="bg-slate-100 rounded-xl p-4 mb-4">
                    <img src="https://blog.locations-vue-turquoise.com/wp-content/uploads/2020/11/MARTINIQUE-GUADELOUPE-CARTE.jpg" alt="Carte des Antilles" class="w-full rounded-lg">
                </div>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div>
                        <i class="fas fa-map-marker-alt text-orange-500 text-2xl mb-2"></i>
                        <p class="font-bold text-sm">Martinique</p>
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt text-orange-500 text-2xl mb-2"></i>
                        <p class="font-bold text-sm">Guadeloupe</p>
                    </div>
                    <!--div>
                        <i class="fas fa-map-marker-alt text-orange-500 text-2xl mb-2"></i>
                        <p class="font-bold text-sm">Guyane</p>
                    </!--div-->
                </div>
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
@enPCMIush