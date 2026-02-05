@extends('layouts.app')

@section('title', 'EPC + | Nos Réalisations')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-blue-900">Nos Réalisations</h2>
        <p class="text-slate-500 mt-2">Découvrez quelques-uns de nos projets réalisés aux Antilles.</p>
    </div>

    <div class="flex justify-center mb-8">
        <div class="bg-white rounded-full shadow-md p-1 flex">
            <button class="px-4 py-2 rounded-full bg-orange-500 text-white font-bold text-sm">Tous</button>
            <button class="px-4 py-2 rounded-full hover:bg-slate-100 font-bold text-sm">Maisons</button>
            <button class="px-4 py-2 rounded-full hover:bg-slate-100 font-bold text-sm">Extensions</button>
            <button class="px-4 py-2 rounded-full hover:bg-slate-100 font-bold text-sm">Piscines</button>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project1/400/300.jpg" alt="Projet 1" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Villa Tropicale - Le Diamant</h3>
                    <p class="text-sm">Permis de construire - 120m²</p>
                </div>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project2/400/300.jpg" alt="Projet 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Extension Moderne - Sainte-Anne</h3>
                    <p class="text-sm">Déclaration de travaux - 45m²</p>
                </div>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project3/400/300.jpg" alt="Projet 3" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Maison Contemporaine - Le Gosier</h3>
                    <p class="text-sm">Permis de construire - 145m²</p>
                </div>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project4/400/300.jpg" alt="Projet 4" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Piscine & Abri - Le Robert</h3>
                    <p class="text-sm">Déclaration de travaux</p>
                </div>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project5/400/300.jpg" alt="Projet 5" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Villa Vue Mer - Deshaies</h3>
                    <p class="text-sm">Permis de construire - 160m²</p>
                </div>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl card-shadow">
            <img src="https://picsum.photos/seed/project6/400/300.jpg" alt="Projet 6" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                <div class="p-6 text-white">
                    <h3 class="font-bold text-lg">Rénovation Complète - Cayenne</h3>
                    <p class="text-sm">Permis de construire - 95m²</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-12">
        <button class="btn-primary text-white px-8 py-3 rounded-xl font-bold">
            Voir tous nos projets
        </button>
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