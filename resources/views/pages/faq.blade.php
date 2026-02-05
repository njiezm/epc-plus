@extends('layouts.app')

@section('title', 'EPC + | Questions Fréquentes')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-blue-900">Questions Fréquentes</h2>
        <p class="text-slate-500 mt-2">Tout ce que vous devez savoir sur les démarches d'urbanisme.</p>
    </div>

    <div class="space-y-4">
        <div class="bg-white rounded-xl card-shadow overflow-hidden">
            <button onclick="toggleAccordion(this)" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50">
                <h3 class="font-bold text-blue-900">Quelle est la différence entre un permis de construire et une déclaration de travaux ?</h3>
                <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-sm text-slate-600">Le permis de construire est obligatoire pour les constructions nouvelles (surface de plancher ou emprise au sol supérieure à 20m²) et pour les travaux importants sur des bâtiments existants. La déclaration de travaux concerne les projets plus modestes (création de surface entre 5m² et 20m², modifications de façade, etc.).</p>
            </div>
        </div>

        <div class="bg-white rounded-xl card-shadow overflow-hidden">
            <button onclick="toggleAccordion(this)" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50">
                <h3 class="font-bold text-blue-900">Combien de temps faut-il pour obtenir un permis de construire aux Antilles ?</h3>
                <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-sm text-slate-600">Le délai d'instruction d'un permis de construire est généralement de 2 mois pour les maisons individuelles et de 3 mois pour les autres projets. Cependant, il est recommandé de prévoir un délai total de 3 à 4 mois en incluant les éventuelles demandes de pièces complémentaires et le temps de réception de l'autorisation.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl card-shadow overflow-hidden">
            <button onclick="toggleAccordion(this)" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50">
                <h3 class="font-bold text-blue-900">Mon projet fait plus de 150m², que dois-je faire ?</h3>
                <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-sm text-slate-600">Pour les projets de construction supérieurs à 150m² de surface de plancher, le recours à un architecte est obligatoire. EPC+ peut vous mettre en relation avec des architectes partenaires spécialisés dans les projets aux Antilles, tout en continuant à assurer le suivi administratif de votre dossier.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl card-shadow overflow-hidden">
            <button onclick="toggleAccordion(this)" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50">
                <h3 class="font-bold text-blue-900">Quels documents dois-je fournir pour lancer ma demande ?</h3>
                <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-sm text-slate-600">Pour commencer, il vous faudra principalement : le plan de situation du terrain, un plan de masse, des plans des façades et toitures, une coupe du terrain et de la construction, et une notice descriptive. Notre équipe se charge de réaliser tous ces documents techniques lors de nos relevés sur site.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl card-shadow overflow-hidden">
            <button onclick="toggleAccordion(this)" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50">
                <h3 class="font-bold text-blue-900">Que se passe-t-il si ma demande est refusée ?</h3>
                <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-sm text-slate-600">En cas de refus, vous avez la possibilité de déposer un recours gracieux auprès de la mairie dans un délai de deux mois à compter de la notification. Si ce recours est également rejeté, vous pouvez former un recours contentieux auprès du tribunal administratif. EPC+ vous accompagne dans ces démarches et vous aide à comprendre les motifs du refus pour y répondre.</p>
            </div>
        </div>
    </div>

    <div class="mt-16 bg-blue-900 text-white p-8 rounded-2xl">
        <h3 class="text-2xl font-bold mb-4">Vous ne trouvez pas la réponse à votre question ?</h3>
        <p class="mb-6">Notre équipe est à votre disposition pour répondre à toutes vos interrogations.</p>
        <a href="{{ route('contact') }}" class="btn-primary text-white px-6 py-3 rounded-xl font-bold">
            Contacter un expert
        </a>
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

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .accordion-content.active {
        max-height: 500px;
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleAccordion(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('i');
        
        content.classList.toggle('active');
        icon.classList.toggle('rotate-180');
    }
</script>
@endpush