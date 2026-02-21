@extends('layouts.app')

@section('title', 'EPC + | Notre Démarche')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    {{-- Header --}}
    <div class="text-center mb-24">
        <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">
            Notre Démarche
        </h2>
        <p class="text-slate-500 text-lg max-w-2xl mx-auto">
            Un accompagnement structuré, fluide et transparent pour sécuriser votre projet de A à Z.
        </p>
    </div>
    <div class="grid lg:grid-cols-12 gap-16 items-start">
        
        {{-- Partie Gauche : Cheminement Graphique (7 colonnes) --}}
        <div class="lg:col-span-7 relative">
            <!-- Ligne de progression verticale (visible sur desktop) -->
            <div class="hidden md:block absolute left-[27px] top-10 bottom-10 w-0.5 bg-gradient-to-b from-orange-500 via-blue-200 to-transparent"></div>

            <div class="space-y-12">
                {{-- Étape 1 --}}
                <div class="relative flex items-start gap-8 group">
                    <div class="flex-shrink-0 w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-orange-200 z-10 group-hover:scale-110 transition-transform">1</div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Rencontre & Échanges</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            La proximité est au cœur de notre métier. Nous prenons le temps de comprendre vos besoins réels.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="flex items-center gap-2 text-sm text-slate-700">
                                <span class="text-orange-500">📞</span> 0696 600 155
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-700">
                                <span class="text-orange-500">📧</span> contact@epc-plus.fr
                            </div>
                            <div class="sm:col-span-2 text-xs text-slate-500 italic mt-1">
                                SMS ou WhatsApp avec vos coordonnées pour un rappel rapide.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Étape 2 --}}
                <div class="relative flex items-start gap-8 group">
                    <div class="flex-shrink-0 w-14 h-14 bg-white border-4 border-orange-500 rounded-2xl flex items-center justify-center text-orange-500 font-bold text-xl shadow-lg z-10 group-hover:scale-110 transition-transform">2</div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Accord & Planification</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Nous vous transmettons un devis sur-mesure. Dès validation, un **interlocuteur unique** est dédié à votre projet pour garantir fluidité et clarté.
                        </p>
                    </div>
                </div>

                {{-- Étape 3 --}}
                <div class="relative flex items-start gap-8 group">
                    <div class="flex-shrink-0 w-14 h-14 bg-white border-4 border-orange-500 rounded-2xl flex items-center justify-center text-orange-500 font-bold text-xl shadow-lg z-10 group-hover:scale-110 transition-transform">3</div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Constitution du Dossier</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Conception des plans et pièces administratives. Vous gardez la main : chaque document est soumis à votre validation avant transmission.
                        </p>
                    </div>
                </div>

                {{-- Étape 4 --}}
                <div class="relative flex items-start gap-8 group">
                    <div class="flex-shrink-0 w-14 h-14 bg-blue-900 rounded-2xl flex items-center justify-center text-white font-bold text-xl shadow-lg z-10 group-hover:scale-110 transition-transform">4</div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex-1">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Dépôt & Suivi Mairie</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Nous gérons les relations avec l'administration. En cas de demande de pièces complémentaires, nous intervenons **gratuitement** pour finaliser votre dossier.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Partie Droite : Objectifs Globaux (5 colonnes) --}}
        <div class="lg:col-span-5 lg:sticky lg:top-24">
            <div class="bg-blue-900 rounded-[2.5rem] p-10 text-white shadow-2xl overflow-hidden relative">
                {{-- Déco --}}
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-800 rounded-full opacity-50"></div>
                
                <h3 class="text-2xl font-bold mb-8 relative z-10">Nos Engagements</h3>
                
                <div class="space-y-8 relative z-10">
                    <div class="flex gap-5">
                        <div class="w-12 h-12 bg-blue-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Expertise & Conformité</h4>
                            <p class="text-blue-200 text-sm leading-relaxed">Garantir que chaque dossier respecte strictement les règles d'urbanisme en vigueur.</p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="w-12 h-12 bg-blue-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Sérénité Totale</h4>
                            <p class="text-blue-200 text-sm leading-relaxed">Zéro stress administratif : nous sommes votre bouclier face aux complexités de la mairie.</p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="w-12 h-12 bg-blue-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Relation Personnalisée</h4>
                            <p class="text-blue-200 text-sm leading-relaxed">Un interlocuteur qui connaît votre projet par cœur et vous informe en temps réel.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-blue-800 relative z-10">
                    <a href="{{ route('contact') }}" class="group flex items-center justify-between bg-orange-500 hover:bg-orange-600 text-white px-6 py-4 rounded-2xl font-bold transition-all transform hover:-translate-y-1">
                        Commencer mon projet
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection