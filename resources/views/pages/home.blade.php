@extends('layouts.app')

@section('title', 'EPC + | Votre Permis de Construire aux Antilles')

@section('content')
<section class="hero-gradient text-white py-20 lg:py-32 relative">
    <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="antilles-badge inline-flex items-center gap-2 px-4 py-1 rounded-full text-xs font-bold mb-6 uppercase tracking-widest">
                <i class="fas fa-map-marker-alt"></i> Votre expert aux Antilles
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Votre Permis de Construire <br><span class="text-orange-400 italic">Clé en main, sans stress.</span>
            </h1>
            <p class="text-xl text-blue-100 mb-10 leading-relaxed max-w-2xl">
                Stop aux tracas administratifs. Nous prenons tout en main de A à Z pour concrétiser votre projet en une expérience facile et fluide.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="btn-primary px-8 py-4 rounded-xl font-bold text-lg shadow-2xl">
                    Démarrer mon projet
                </a>
                <a href="{{ route('services') }}" class="bg-white/10 backdrop-blur-md border border-white/20 px-8 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                    Nos prestations
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
        <div class="flex items-center gap-4">
            <i class="fas fa-check-circle text-orange-500 text-3xl"></i>
            <div><h4 class="font-bold text-sm">Faisabilité</h4><p class="text-xs text-slate-500">Étude PLU & PPRN</p></div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-file-signature text-orange-500 text-3xl"></i>
            <div><h4 class="font-bold text-sm">Dossier Complet</h4><p class="text-xs text-slate-500">PCMI 1 à PCMI 8</p></div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-university text-orange-500 text-3xl"></i>
            <div><h4 class="font-bold text-sm">Suivi</h4><p class="text-xs text-slate-500">Interlocuteur Unique</p></div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-hard-hat text-orange-500 text-3xl"></i>
            <div><h4 class="font-bold text-sm">Panneau Offert</h4><p class="text-xs text-slate-500">Affichage réglementaire</p></div>
        </div>
    </div>
</section>

<section class="py-24 max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
        <h2 class="text-3xl font-extrabold uppercase tracking-tight">Pourquoi faire appel à <span class="text-blue-900">EPC <span class="text-orange-500">+</span></span> ?</h2>
        <div class="h-1 w-20 bg-orange-500 mx-auto mt-4"></div>
    </div>
    <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white p-8 card-shadow rounded-2xl">
            <div class="step-number mb-6">1</div>
            <h3 class="font-bold mb-4">Étude de faisabilité</h3>
            <p class="text-sm text-slate-500">Analyse complète préalable de votre projet et compte rendu détaillé avant de vous lancer.</p>
        </div>
        <div class="bg-white p-8 card-shadow rounded-2xl">
            <div class="step-number mb-6">2</div>
            <h3 class="font-bold mb-4">Constitution complète</h3>
            <p class="text-sm text-slate-500">Rédaction de tous les PCMI, et attestation et réalisation de l'ensemble des plans graphiques.</p>
        </div>
        <div class="bg-white p-8 card-shadow rounded-2xl">
            <div class="step-number mb-6">3</div>
            <h3 class="font-bold mb-4">Suivi administratif</h3>
            <p class="text-sm text-slate-500">Nous gérons les relations avec les services d'urbanisme et les demandes complémentaires.</p>
        </div>
        <div class="bg-white p-8 card-shadow rounded-2xl">
            <div class="step-number mb-6">4</div>
            <h3 class="font-bold mb-4">Retours réguliers</h3>
            <p class="text-sm text-slate-500">Vous êtes informé en temps réel de l'avancée de votre dossier par votre interlocuteur.</p>
        </div>
    </div>
</section>

<!-- Section témoignages -->
<section class="py-24 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold uppercase tracking-tight">Ce que disent nos clients</h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="testimony-card">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client1/60/60.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">Marie L.</h4>
                        <p class="text-xs text-slate-500">Le Robert, Martinique</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 italic">"Service impeccable ! Mon permis de construire a été obtenu en un temps record. Je recommande vivement EPC+ pour leur professionnalisme et leur réactivité."</p>
                <div class="flex mt-4 text-orange-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="testimony-card">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client2/60/60.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">Jean-Pierre M.</h4>
                        <p class="text-xs text-slate-500">Le Gosier, Guadeloupe</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 italic">"J'étais perdu dans les démarches administratives. Grâce à EPC+, tout a été simplifié. Un interlocuteur unique, disponible et compétent. Merci !"</p>
                <div class="flex mt-4 text-orange-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="testimony-card">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client3/60/60.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">Sophie D.</h4>
                        <p class="text-xs text-slate-500">Le Lamentin, Martnique</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 italic">"Les rendus 3D étaient magnifiques et ont vraiment aidé à visualiser mon projet. Le suivi a été parfait du début à la fin. Service 5 étoiles !"</p>
                <div class="flex mt-4 text-orange-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-900 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6">Conseil d'expert : <span class="text-orange-500">Anticipez !</span></h2>
            <p class="text-slate-400 mb-8 leading-relaxed">
                Les délais de traitement en administration peuvent être longs (comptez 3 mois minimum). N'attendez pas le dernier moment pour lancer vos démarches.
            </p>
            <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                <p class="text-sm italic">"Pour tout projet supérieur à 150 m², nous vous mettons en relation avec notre réseau d'architectes partenaires."</p>
            </div>
        </div>
        <div class="md:w-1/2 grid grid-cols-2 gap-4">
            <div class="bg-blue-600 p-8 rounded-2xl text-center">
                <p class="text-4xl font-black mb-2">PC</p>
                <p class="text-xs uppercase font-bold text-blue-100">Permis de Construire</p>
            </div>
            <div class="bg-orange-600 p-8 rounded-2xl text-center">
                <p class="text-4xl font-black mb-2">DP</p>
                <p class="text-xs uppercase font-bold text-orange-100">Déclaration Travaux</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap');
    
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

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('images/home.jpg') center/cover;
        opacity: 0.2;
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
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

    .step-number {
        background: rgba(249, 115, 22, 0.1);
        color: var(--accent-orange);
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: bold;
    }

    .antilles-badge {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .tropical-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 50C60 40 70 30 80 20C90 10 100 0 100 0C100 0 90 10 80 20C70 30 60 40 50 50Z' fill='%2310b981' fill-opacity='0.05'/%3E%3C/svg%3E");
    }

    .testimony-card {
        background: white;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .testimony-card::before {
        content: '"';
        position: absolute;
        top: -10px;
        left: 20px;
        font-size: 80px;
        color: rgba(249, 115, 22, 0.2);
        font-family: Georgia, serif;
    }
</style>
@endpush