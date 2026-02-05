<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EPC + | Votre Permis de Construire aux Antilles')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-slate-50">
    <!-- Header / Nav -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2 cursor-pointer" onclick="window.location.href='{{ route('home') }}'">
                    <!-- Logo amélioré avec icône de maison -->
                    <div class="bg-blue-900 text-white p-2 rounded-lg">
                        <i class="fas fa-home text-xl"></i>
                    </div>
                    <div class="flex flex-col leading-none">
                        <span class="logo-text text-3xl text-blue-900">EPC <span class="text-orange-500">+</span></span>
                        <span class="text-[10px] font-bold tracking-[0.2em] text-blue-700 uppercase">Pôle Bati Pro Plus</span>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-semibold hover:text-orange-500 transition-colors {{ request()->routeIs('home') ? 'text-orange-500' : '' }}">ACCUEIL</a>
                    <a href="{{ route('services') }}" class="text-sm font-semibold hover:text-orange-500 transition-colors {{ request()->routeIs('services') ? 'text-orange-500' : '' }}">NOS PRESTATIONS</a>
                    <a href="{{ route('gallery') }}" class="text-sm font-semibold hover:text-orange-500 transition-colors {{ request()->routeIs('gallery') ? 'text-orange-500' : '' }}">RÉALISATIONS</a>
                    <a href="{{ route('faq') }}" class="text-sm font-semibold hover:text-orange-500 transition-colors {{ request()->routeIs('faq') ? 'text-orange-500' : '' }}">FAQ</a>
                    <a href="{{ route('about') }}" class="text-sm font-semibold hover:text-orange-500 transition-colors {{ request()->routeIs('about') ? 'text-orange-500' : '' }}">POURQUOI NOUS ?</a>
                    <a href="tel:0696600155" class="bg-blue-50 text-blue-900 px-4 py-2 rounded-full text-sm font-bold border border-blue-100">
                        <i class="fas fa-phone-alt mr-2"></i> 0696 60 01 55
                    </a>
                    <a href="{{ route('contact') }}" class="btn-primary text-white px-6 py-2 rounded-lg font-bold text-sm shadow-lg">
                        DEVIS GRATUIT
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-16 pb-8 tropical-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <span class="logo-text text-3xl">EPC <span class="text-orange-500">+</span></span>
                    <p class="mt-4 text-slate-400 text-sm leading-relaxed">
                        Votre expert en urbanisme aux Antilles. Nous concrétisons vos projets de construction en expériences fluides et sans stress.
                    </p>
                    <div class="flex gap-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-orange-500">Services</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">Permis de construire</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Déclaration de travaux</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Étude de faisabilité</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Aménagement intérieur</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-orange-500">Contact Rapide</h4>
                    <ul class="space-y-4 text-sm">
                        <li><i class="fas fa-phone mr-3 text-slate-500"></i> 0696 60 01 55</li>
                        <li><i class="fas fa-envelope mr-3 text-slate-500"></i> contact@epc-plus.fr</li>
                        <li><i class="fas fa-map-marker-alt mr-3 text-slate-500"></i> Martinique / Guadeloupe / Guyane</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 uppercase text-xs tracking-widest text-orange-500">Newsletter</h4>
                    <p class="text-slate-400 text-sm mb-4">Recevez nos actualités et conseils en urbanisme.</p>
                    
                    <!-- Formulaire newsletter plus compact -->
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mb-3">
                        @csrf
                        <div class="flex rounded-md overflow-hidden max-w-xs">
                            <input type="email" name="email" placeholder="Votre email" 
                                   class="bg-slate-800 px-3 py-2 text-sm flex-1 outline-none focus:bg-slate-700 border-none" 
                                   required>
                            <button type="submit" 
                                    class="bg-orange-600 px-3 py-2 hover:bg-orange-700 transition-colors">
                                <i class="fas fa-paper-plane text-sm"></i>
                            </button>
                        </div>
                    </form>
                    
                    @if(session('newsletter_success'))
                        <p class="text-green-400 text-xs mt-2">{{ session('newsletter_success') }}</p>
                    @endif
                    @if(session('newsletter_error'))
                        <p class="text-red-400 text-xs mt-2">{{ session('newsletter_error') }}</p>
                    @endif
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 uppercase tracking-tighter">
                <p>© 2023 EPC + — TOUS DROITS RÉSERVÉS</p>
                <div class="flex gap-6">
                    <a href="{{ route('legal') }}" class="hover:text-white">Mentions Légales</a>
                    <a href="{{ route('privacy') }}" class="hover:text-white">Politique de confidentialité</a>
                    <a href="{{ route('cgv') }}" class="hover:text-white">CGV</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>