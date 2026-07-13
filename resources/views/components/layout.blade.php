<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KET Consulting' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-surface text-ink font-sans flex flex-col min-h-screen antialiased">
    <header class="sticky top-0 z-50 border-b border-primary/10 bg-white shadow-[0_4px_18px_rgba(17,17,17,0.06)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-20">

                {{-- Logo : sans bloc autour, plus visible sur fond blanc --}}
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                    class="flex shrink-0 items-center transition duration-300 hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-red focus:ring-offset-2 focus:ring-offset-white">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="KET Consulting"
                        class="h-14 sm:h-16 w-auto object-contain">
                </a>

                {{-- Navigation : à droite du logo, proche du bloc langues + CTA --}}
                <nav class="hidden lg:flex ml-auto items-center gap-6 xl:gap-8 text-sm font-semibold"
                    aria-label="{{ __('Navigation principale') }}">

                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                        class="relative py-2 {{ request()->routeIs('home') ? 'text-primary after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:rounded-full after:bg-red' : 'text-primary/70 hover:text-primary' }} transition duration-200">
                        {{ __('Accueil') }}
                    </a>

                    <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                        class="relative py-2 {{ request()->routeIs('about') ? 'text-primary after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:rounded-full after:bg-red' : 'text-primary/70 hover:text-primary' }} transition duration-200">
                        {{ __('À propos') }}
                    </a>

                    <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                        class="relative py-2 {{ request()->routeIs('services') ? 'text-primary after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:rounded-full after:bg-red' : 'text-primary/70 hover:text-primary' }} transition duration-200">
                        {{ __('Nos services') }}
                    </a>

                    <a href="{{ route('partnership', ['locale' => app()->getLocale()]) }}"
                        class="relative py-2 {{ request()->routeIs('partnership') ? 'text-primary after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:rounded-full after:bg-red' : 'text-primary/70 hover:text-primary' }} transition duration-200">
                        {{ __('Partenariat') }}
                    </a>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="relative py-2 {{ request()->routeIs('contact') ? 'text-primary after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:rounded-full after:bg-red' : 'text-primary/70 hover:text-primary' }} transition duration-200">
                        {{ __('Contact') }}
                    </a>
                </nav>

                <div class="hidden lg:flex items-center gap-5 pl-6 xl:pl-8">
                    <div class="flex items-center gap-2 text-xs font-bold tracking-[0.2em] uppercase">
                        <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'fr']) }}"
                            class="{{ app()->getLocale() === 'fr' ? 'text-primary' : 'text-primary/45 hover:text-primary/80' }} transition">
                            FR
                        </a>

                        <span class="text-primary/25">|</span>

                        <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'en']) }}"
                            class="{{ app()->getLocale() === 'en' ? 'text-primary' : 'text-primary/45 hover:text-primary/80' }} transition">
                            EN
                        </a>
                    </div>

                    {{-- Rouge : réservé à l'action principale --}}
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-lg bg-red px-4 xl:px-5 py-3 text-sm font-bold text-white shadow-md transition duration-300 hover:bg-red-dark focus:outline-none focus:ring-2 focus:ring-primary/25 focus:ring-offset-2 focus:ring-offset-white">
                        {{ __('Demander un devis') }}
                    </a>
                </div>

                <button id="mobile-menu-button"
                    class="lg:hidden ml-auto inline-flex items-center justify-center rounded-md p-2 text-primary hover:bg-primary/5 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary/40"
                    aria-label="{{ __('Ouvrir le menu') }}"
                    aria-controls="mobile-menu"
                    aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path id="burger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="cross-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden border-t border-primary/10 bg-white">
            <nav class="px-4 pt-3 pb-6 space-y-1 font-medium" aria-label="{{ __('Navigation mobile') }}">

                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                    class="block rounded-md px-3 py-2.5 text-base {{ request()->routeIs('home') ? 'bg-primary/8 text-primary' : 'text-primary/80 hover:bg-primary/5 hover:text-primary' }} transition">
                    {{ __('Accueil') }}
                </a>

                <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                    class="block rounded-md px-3 py-2.5 text-base {{ request()->routeIs('about') ? 'bg-primary/8 text-primary' : 'text-primary/80 hover:bg-primary/5 hover:text-primary' }} transition">
                    {{ __('À propos') }}
                </a>

                <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                    class="block rounded-md px-3 py-2.5 text-base {{ request()->routeIs('services') ? 'bg-primary/8 text-primary' : 'text-primary/80 hover:bg-primary/5 hover:text-primary' }} transition">
                    {{ __('Nos services') }}
                </a>

                <a href="{{ route('partnership', ['locale' => app()->getLocale()]) }}"
                    class="block rounded-md px-3 py-2.5 text-base {{ request()->routeIs('partnership') ? 'bg-primary/8 text-primary' : 'text-primary/80 hover:bg-primary/5 hover:text-primary' }} transition">
                    {{ __('Partenariat') }}
                </a>

                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                    class="block rounded-md px-3 py-2.5 text-base {{ request()->routeIs('contact') ? 'bg-primary/8 text-primary' : 'text-primary/80 hover:bg-primary/5 hover:text-primary' }} transition">
                    {{ __('Contact') }}
                </a>

                <div class="flex items-center gap-3 px-3 pt-4 text-xs font-bold tracking-[0.2em] uppercase">
                    <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'fr']) }}"
                        class="{{ app()->getLocale() === 'fr' ? 'text-primary' : 'text-primary/45' }}">
                        FR
                    </a>

                    <span class="text-primary/25">|</span>

                    <a href="{{ route(request()->route()->getName() ?? 'home', ['locale' => 'en']) }}"
                        class="{{ app()->getLocale() === 'en' ? 'text-primary' : 'text-primary/45' }}">
                        EN
                    </a>
                </div>

                <div class="pt-4 mt-3 border-t border-primary/10">
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="block w-full rounded-lg bg-red py-3 text-center text-sm font-bold text-white shadow-md transition hover:bg-red-dark">
                        {{ __('Demander un devis') }}
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-primary-dark text-white border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid gap-10 md:grid-cols-3">
                <div>
                    {{-- Même principe que le header : le logo garde un fond clair --}}
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                        class="inline-flex rounded-lg bg-white px-3 py-2 shadow-sm transition hover:bg-surface">
                        <img
                            src="{{ asset('images/logo.png') }}"
                            alt="KET Consulting"
                            class="h-10 sm:h-12 w-auto object-contain">
                    </a>

                    <p class="mt-5 max-w-sm text-sm leading-relaxed text-white/70">
                        {{ __('KET Consulting accompagne les organisations dans les télécommunications, le numérique, la sécurité informatique et l’innovation technologique.') }}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-red">
                        {{ __('Navigation') }}
                    </p>

                    <nav class="mt-4 space-y-2.5 text-sm text-white/70">
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Accueil') }}</a>
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('À propos') }}</a>
                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Services') }}</a>
                        <a href="{{ route('partnership', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Partenariat') }}</a>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block hover:text-white transition">{{ __('Contact') }}</a>
                    </nav>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-red">
                        {{ __('Contact') }}
                    </p>

                    <div class="mt-4 space-y-2.5 text-sm leading-relaxed text-white/70">
                        <p>{{ __('Hamdallaye ACI 2000, Avenue Cheick Zahed, Bamako, Mali') }}</p>
                        <a href="mailto:keytechnologie82@gmail.com" class="block hover:text-white transition">
                            keytechnologie82@gmail.com
                        </a>
                        <a href="tel:+22382318124" class="block hover:text-white transition">
                            +223 82318124 / 69406504
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex flex-col gap-3 border-t border-white/10 pt-6 text-sm text-white/55 sm:flex-row sm:items-center sm:justify-between">
                <p>&copy; {{ date('Y') }} KET Consulting. {{ __('Tous droits réservés.') }}</p>
                <span class="text-xs font-semibold uppercase tracking-[0.16em] text-white/40">
                    {{ __('Key of technology') }}
                </span>
            </div>
        </div>
    </footer>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');
        const crossIcon = document.getElementById('cross-icon');

        mobileMenuButton?.addEventListener('click', function() {
            const isOpen = !mobileMenu.classList.contains('hidden');

            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            crossIcon.classList.toggle('hidden');
            mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
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

    @stack('scripts')
</body>

</html>
