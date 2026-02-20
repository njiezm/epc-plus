@extends('layouts.app')

@section('title', 'EPC + | Contact')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20 grid lg:grid-cols-2 gap-20">
    <div>
        <h2 class="text-4xl font-extrabold text-blue-900 uppercase">Contactez<br>vos experts</h2>
        <p class="text-slate-500 mt-6 text-lg">Prêt à concrétiser votre projet ? Remplissez le formulaire ou appelez-nous directement.</p>
        
        <div class="mt-12 space-y-8">
            <div class="flex items-center gap-6">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Téléphone</p>
                    <p class="text-2xl font-bold text-blue-900">0696 60 01 55</p>
                    <p class="text-xs text-slate-500">Du lundi au vendredi, 9h-18h</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</p>
                    <p class="text-xl font-bold text-blue-900">contact@epc-plus.fr</p>
                    <p class="text-xs text-slate-500">Réponse sous 24h</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nos agences</p>
                    <p class="text-xl font-bold text-blue-900">Martinique / Guadeloupe</p>
                    <p class="text-xs text-slate-500">RDV sur site possible</p>
                </div>
            </div>
        </div>

        <div class="mt-16 p-8 bg-blue-900 text-white rounded-3xl relative overflow-hidden">
            <h4 class="font-bold text-lg mb-2 relative z-10">Groupe Bati Pro Plus</h4>
            <p class="text-blue-200 text-sm relative z-10 italic">"L'assurance d'un projet solide, de la conception à la réalisation."</p>
            <i class="fas fa-hard-hat absolute -right-4 -bottom-4 text-white/5 text-9xl"></i>
        </div>

        <!-- Ajout d'un encart pour les urgences -->
        <div class="mt-8 p-6 bg-orange-50 border border-orange-200 rounded-2xl">
            <div class="flex items-center gap-4">
                <div class="bg-orange-500 text-white p-3 rounded-xl">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div>
                    <h4 class="font-bold text-orange-900">Urgence administrative ?</h4>
                    <p class="text-sm text-orange-700">Une date limite approche ? Contactez-nous au plus vite pour une prise en charge prioritaire.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 md:p-12 rounded-3xl card-shadow">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        
        <h3 class="text-2xl font-bold mb-6">Demandez votre devis gratuit</h3>
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Nom & Prénom *</label>
                    <input type="text" name="name" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all" required>
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Téléphone *</label>
                    <input type="tel" name="phone" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all" required>
                    @error('phone')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Email *</label>
                <input type="email" name="email" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all" required>
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Type de projet *</label>
                <select name="project_type" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all" required>
                    <option value="">Sélectionnez...</option>
                    <option>Permis de Construire (< 150m²)</option>
                    <option>Permis de Construire (> 150m²)</option>
                    <option>Déclaration Préalable (Travaux)</option>
                    <option>Extension de maison</option>
                    <option>Piscine / Abri de jardin</option>
                    <option>Aménagement intérieur</option>
                    <option>Demande de partenariat</option>
                    <option>Autre</option>
                </select>
                @error('project_type')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Adresse du projet (Commune) *</label>
                <input type="text" name="location" placeholder="Ex: Fort-de-France, Saint-François..." class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all" required>
                @error('location')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Surface approximative (m²)</label>
                <input type="number" name="surface" placeholder="Ex: 120" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all">
                @error('surface')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Description du projet</label>
                <textarea name="description" rows="4" placeholder="Décrivez votre projet en quelques mots..." class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-orange-500 transition-all"></textarea>
                @error('description')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-start gap-2">
                <input type="checkbox" name="rgpd" id="rgpd" class="mt-1" required>
                <label for="rgpd" class="text-xs text-slate-500">
                    J'accepte que mes données soient utilisées pour me recontacter dans le cadre de ma demande. Conformément à la réglementation, vous disposez d'un droit d'accès, de modification et de suppression de vos données. 
                    <a href="#" class="text-orange-500 underline">En savoir plus</a>
                </label>
                @error('rgpd')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full btn-primary text-white font-bold py-5 rounded-xl shadow-xl uppercase tracking-widest">
                Envoyer ma demande
            </button>
        </form>
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