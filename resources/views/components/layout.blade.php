<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KET Consulting' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary text-white font-sans flex flex-col min-h-screen transition-colors duration-300">
    <header class="sticky top-0 z-50 bg-primary/40 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="KET Consulting"
                        class="h-10 sm:h-12 w-auto object-contain">
                </a>

                <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold">
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                        class="{{ request()->routeIs('home') ? 'text-white' : 'text-white/75 hover:text-white' }} transition">
                        {{ __('Accueil') }}
                    </a>

                    <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                        class="{{ request()->routeIs('about') ? 'text-white' : 'text-white/75 hover:text-white' }} transition">
                        {{ __('À propos') }}
                    </a>

                    <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                        class="{{ request()->routeIs('services') ? 'text-white' : 'text-white/75 hover:text-white' }} transition">
                        {{ __('Services') }}
                    </a>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="{{ request()->routeIs('contact') ? 'text-white' : 'text-white/75 hover:text-white' }} transition">
                        {{ __('Contact') }}
                    </a>
                </nav>

                <div class="hidden lg:flex items-center gap-4">
                    <div class="flex items-center gap-2 text-xs font-bold tracking-[0.2em] uppercase">
                        <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'fr']) }}"
                            class="{{ app()->getLocale() === 'fr' ? 'text-white' : 'text-white/50' }}">
                            FR
                        </a>
                        <span class="text-white/30">|</span>
                        <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'en']) }}"
                            class="{{ app()->getLocale() === 'en' ? 'text-white' : 'text-white/50' }}">
                            EN
                        </a>
                    </div>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="inline-flex items-center justify-center rounded-lg bg-white px-5 py-3 text-sm font-bold text-primary hover:bg-surface transition shadow-md">
                        {{ __('Demander un devis') }}
                    </a>
                </div>

                <button id="mobile-menu-button" class="lg:hidden text-white hover:text-white/80 focus:outline-none" aria-label="Open menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="burger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="cross-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-primary-dark border-t border-white/10">
            <div class="px-4 pt-3 pb-6 space-y-3 font-medium">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block py-2 text-base text-white/85">
                    {{ __('Accueil') }}
                </a>

                <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="block py-2 text-base text-white/85">
                    {{ __('À propos') }}
                </a>

                <a href="{{ route('services', ['locale' => app()->getLocale()]) }}" class="block py-2 text-base text-white/85">
                    {{ __('Services') }}
                </a>

                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block py-2 text-base text-white/85">
                    {{ __('Contact') }}
                </a>

                <div class="pt-4 border-t border-white/10">
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="block w-full rounded-lg bg-white text-primary text-center py-3 font-bold hover:bg-surface transition">
                        {{ __('Demander un devis') }}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-primary-dark text-white py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="KET Consulting"
                        class="h-12 w-auto object-contain mb-4">
                    <p class="text-white/75 text-sm leading-relaxed">
                        {{ __('KET Consulting accompagne les organisations dans les télécommunications, le numérique, la sécurité informatique et l’innovation technologique.') }}
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">{{ __('Navigation') }}</h3>
                    <div class="space-y-2 text-sm text-white/75">
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Accueil') }}</a>
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('À propos') }}</a>
                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Services') }}</a>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Contact') }}</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">{{ __('Contact') }}</h3>
                    <div class="space-y-2 text-sm text-white/75">
                        <p>{{ __('Hamdallaye ACI 2000, Avenue Cheick Zahed, Bamako, Mali') }}</p>
                        <p>keytechnologie82@gmail.com</p>
                        <p>+223 82318124 / 69406504</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-white/10 text-sm text-white/60">
                <p>&copy; {{ date('Y') }} KET Consulting. {{ __('Tous droits réservés.') }}</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');
        const crossIcon = document.getElementById('cross-icon');

        mobileMenuButton?.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            crossIcon.classList.toggle('hidden');
        });

        const heroSlides = document.querySelectorAll('.hero-slide');
        let currentHeroSlide = 0;

        if (heroSlides.length > 1) {
            setInterval(() => {
                heroSlides[currentHeroSlide].classList.remove('opacity-100');
                heroSlides[currentHeroSlide].classList.add('opacity-0');

                currentHeroSlide = (currentHeroSlide + 1) % heroSlides.length;

                heroSlides[currentHeroSlide].classList.remove('opacity-0');
                heroSlides[currentHeroSlide].classList.add('opacity-100');
            }, 5000);
        }
    </script>
</body>

</html>
