<x-layout>
    <x-slot:title>{{ __('Accueil') }} | KET Consulting</x-slot:title>

    {{-- HERO --}}
    <section class="relative min-h-[92vh] flex items-center justify-center overflow-hidden bg-primary">
        <div class="absolute inset-0">
            <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000">
                <img
                    src="{{ asset('images/home/telecom.jpg') }}"
                    alt="{{ __('KET Consulting - Télécommunications') }}"
                    class="h-full w-full object-cover">
            </div>

            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <img
                    src="{{ asset('images/home/hero-2.jpg') }}"
                    alt="{{ __('KET Consulting - Solutions numériques') }}"
                    class="h-full w-full object-cover">
            </div>

            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <img
                    src="{{ asset('images/home/hero-3.jpg') }}"
                    alt="{{ __('KET Consulting - Innovation technologique') }}"
                    class="h-full w-full object-cover">
            </div>

            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <img
                    src="{{ asset('images/home/hero-1.jpg') }}"
                    alt="{{ __('KET Consulting - Infrastructures') }}"
                    class="h-full w-full object-cover">
            </div>

            {{-- Overlay bleu marine : assure la lisibilité sur chaque image --}}
            <div class="absolute inset-0 bg-primary/55"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-primary/25 via-primary/55 to-primary-dark/90"></div>
        </div>

        <div class="relative z-10 w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div class="max-w-5xl mx-auto text-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6 sm:mb-8 max-w-3xl mx-auto">
                        {{-- Rouge : action principale --}}
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                           class="inline-flex items-center justify-center rounded-lg bg-red px-5 py-3 text-sm font-bold text-white shadow-md transition duration-300 hover:bg-red-dark">
                            {{ __('Découvrir KET') }}
                        </a>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                           class="inline-flex items-center justify-center rounded-lg border border-white/35 bg-white/10 px-5 py-3 text-sm font-semibold text-white backdrop-blur-sm transition duration-300 hover:bg-white/20">
                            {{ __('Explorer nos solutions technologiques') }}
                        </a>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black leading-[1.08] tracking-tight text-white">
                        {{ __('Télécommunications stratégiques.') }}<br>
                        {{ __('Solutions numériques à fort impact.') }}
                    </h1>

                    <p class="mt-6 max-w-3xl mx-auto text-sm sm:text-base lg:text-lg leading-relaxed text-white/85">
                        {{ __('KET Consulting accompagne les entreprises, institutions et organisations avec des solutions innovantes en télécommunications, développement logiciel, cybersécurité, analyse des données et transformation numérique durable.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- PRESENTATION --}}
    <section class="bg-white text-ink border-t border-primary/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-5">
                        {{ __('Présentation') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] max-w-3xl text-ink">
                        {{ __('Une entreprise pensée pour l’impact numérique.') }}
                    </h2>

                    <p class="mt-8 text-base sm:text-lg leading-relaxed text-ink/75 max-w-2xl">
                        {{ __('Basée à Bamako, KET Consulting conçoit et déploie des solutions technologiques adaptées aux réalités du terrain. Nous intervenons à la croisée des télécommunications, du développement logiciel, de la sécurité informatique et de l’accompagnement numérique.') }}
                    </p>

                    <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-2xl">
                        {{ __('Notre approche privilégie la clarté, l’utilité et l’efficacité : des solutions concrètes, adaptées aux contraintes locales, mais pensées pour durer, évoluer et produire un impact mesurable.') }}
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                           class="inline-flex items-center justify-center rounded-lg bg-red px-5 py-3 text-sm font-bold text-white shadow-md transition duration-300 hover:bg-red-dark">
                            {{ __('En savoir plus') }}
                        </a>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                           class="inline-flex items-center justify-center rounded-lg border border-primary/20 bg-white px-5 py-3 text-sm font-semibold text-primary transition duration-300 hover:bg-surface">
                            {{ __('Découvrir nos expertises') }}
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="relative">
                        <div class="absolute -inset-4 rounded-[36px] bg-primary/8 blur-2xl"></div>

                        <div
                            class="relative overflow-hidden rounded-[32px] border border-primary/10 shadow-[0_18px_40px_rgba(6,27,79,0.14)]"
                            x-data='{
                                slides: [
                                    { src: "{{ asset('images/home/presentation/slide-1.png') }}", alt: "{{ __('KET Consulting - Télécommunications') }}" },
                                    { src: "{{ asset('images/home/presentation/slide-2.jpg') }}", alt: "{{ __('KET Consulting - Développement') }}" },
                                    { src: "{{ asset('images/home/presentation/slide-3.jpg') }}", alt: "{{ __('KET Consulting - Datacenter') }}" },
                                ],
                                active: 0,
                                autoplay: null,
                                init() {
                                    if (this.slides.length <= 1) return;
                                    this.start();
                                },
                                start() {
                                    this.stop();
                                    this.autoplay = setInterval(() => {
                                        this.active = (this.active + 1) % this.slides.length;
                                    }, 5000);
                                },
                                stop() {
                                    if (this.autoplay) {
                                        clearInterval(this.autoplay);
                                        this.autoplay = null;
                                    }
                                },
                                goTo(index) {
                                    this.active = index;
                                    this.start();
                                }
                            }'>

                            <template x-for="(slide, index) in slides" :key="index">
                                <img
                                    :src="slide.src"
                                    :alt="slide.alt"
                                    x-show="active === index"
                                    x-transition:enter="transition ease-out duration-700"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-700"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    class="absolute inset-0 w-full h-[320px] sm:h-[420px] lg:h-[560px] object-cover">
                            </template>

                            <div class="relative h-[320px] sm:h-[420px] lg:h-[560px]"></div>

                            <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/75 via-primary/20 to-transparent pointer-events-none"></div>

                            <div class="absolute left-4 right-4 bottom-4 sm:left-6 sm:right-auto sm:max-w-sm rounded-2xl border border-white/20 bg-primary/65 backdrop-blur-md p-4 sm:p-5">
                                <p class="text-xs font-bold uppercase tracking-[0.22em] text-red mb-2">
                                    {{ __('KET Consulting') }}
                                </p>

                                <p class="text-sm sm:text-base leading-relaxed text-white/90">
                                    {{ __('Des solutions numériques et techniques conçues pour répondre aux enjeux concrets des organisations.') }}
                                </p>
                            </div>

                            <div class="absolute bottom-4 right-4 sm:right-6 flex gap-2 z-10">
                                <template x-for="(slide, index) in slides" :key="'dot-' + index">
                                    <button
                                        type="button"
                                        @click="goTo(index)"
                                        :class="active === index ? 'bg-red w-6' : 'bg-white/45 w-2'"
                                        class="h-2 rounded-full transition-all duration-300"
                                        :aria-label="'Slide ' + (index + 1)">
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EXPERTISE --}}
    <section class="bg-surface text-ink border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="max-w-3xl mx-auto mb-14 text-center">
                <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux">
                    {{ __('Nos expertises') }}
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] text-ink">
                    {{ __('Nos domaines d’expertise') }}
                </h2>

                <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-2xl mx-auto">
                    {{ __('KET Consulting intervient sur plusieurs champs complémentaires afin d’accompagner les organisations dans leurs projets numériques, techniques et opérationnels.') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8">
                {{-- Carte 1 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(6,27,79,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(6,27,79,0.14)]">
                    <div class="relative h-52 overflow-hidden bg-primary/5">
                        <img
                            src="{{ asset('images/home/dev.jpg') }}"
                            alt="{{ __('Développement web et mobile') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/35 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Développement') }}
                        </p>

                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-tight text-ink">
                            {{ __('Développement web et mobile') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-md mx-auto">
                            {{ __('Conception d’applications web et mobiles performantes, robustes et adaptées aux réalités opérationnelles des entreprises, institutions et organisations.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                           class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-red hover:text-red-dark transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>

                {{-- Carte 2 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(6,27,79,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(6,27,79,0.14)]">
                    <div class="relative h-52 overflow-hidden bg-primary/5">
                        <img
                            src="{{ asset('images/home/telecom.jpg') }}"
                            alt="{{ __('Télécommunications et infrastructures') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/35 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Télécommunications') }}
                        </p>

                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-tight text-ink">
                            {{ __('Télécommunications et infrastructures') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-md mx-auto">
                            {{ __('Études, suivi et exécution de travaux de télécommunications avec une exigence forte de rigueur, de qualité et de continuité de service.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                           class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-red hover:text-red-dark transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>

                {{-- Carte 3 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(6,27,79,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(6,27,79,0.14)]">
                    <div class="relative h-52 overflow-hidden bg-primary/5">
                        <img
                            src="{{ asset('images/home/donnee.jpg') }}"
                            alt="{{ __('Sécurité, données et accompagnement') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/35 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Sécurité & données') }}
                        </p>

                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-tight text-ink">
                            {{ __('Sécurité, données et accompagnement') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-md mx-auto">
                            {{ __('Cybersécurité, analyse de données, équipements informatiques et formation pour renforcer durablement la performance numérique des structures.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                           class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-red hover:text-red-dark transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- POURQUOI NOUS CHOISIR --}}
    <section class="relative bg-white text-ink border-t border-primary/10 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
            <div class="absolute -top-20 left-1/3 h-72 w-72 rounded-full bg-bordeaux/5 blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                        {{ __('Pourquoi nous choisir') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.06] max-w-md text-ink">
                        {{ __('Une expertise utile, structurée et orientée résultats.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-md">
                        {{ __('Chaque intervention repose sur une méthode claire et une compréhension fine des enjeux techniques et organisationnels de nos clients.') }}
                    </p>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid sm:grid-cols-2 gap-5 lg:gap-6">
                        <div class="rounded-[22px] border border-primary/10 bg-surface p-6 sm:p-7 shadow-[0_10px_24px_rgba(6,27,79,0.05)] transition hover:-translate-y-0.5 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Approche professionnelle') }}</h3>
                            <p class="text-ink/70 text-sm sm:text-base leading-relaxed">
                                {{ __('Des interventions menées avec méthode, précision et engagement sur la qualité.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-surface p-6 sm:p-7 shadow-[0_10px_24px_rgba(6,27,79,0.05)] transition hover:-translate-y-0.5 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Vision stratégique') }}</h3>
                            <p class="text-ink/70 text-sm sm:text-base leading-relaxed">
                                {{ __('Des solutions conçues pour soutenir durablement la croissance et la visibilité des structures accompagnées.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-surface p-6 sm:p-7 shadow-[0_10px_24px_rgba(6,27,79,0.05)] transition hover:-translate-y-0.5 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Expertise multidisciplinaire') }}</h3>
                            <p class="text-ink/70 text-sm sm:text-base leading-relaxed">
                                {{ __('Télécommunications, logiciels, sécurité, données et équipements dans une même dynamique de service.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-surface p-6 sm:p-7 shadow-[0_10px_24px_rgba(6,27,79,0.05)] transition hover:-translate-y-0.5 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Accompagnement durable') }}</h3>
                            <p class="text-ink/70 text-sm sm:text-base leading-relaxed">
                                {{ __('Une relation de proximité construite autour des besoins réels, du contexte et des objectifs du client.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NOS PARTENAIRES --}}
    <section id="partenaires" class="bg-surface text-ink border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="max-w-3xl mx-auto mb-14 text-center">
                <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux">
                    {{ __('Nos partenaires') }}
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] text-ink">
                    {{ __('Nous travaillons avec des partenaires de confiance') }}
                </h2>

                <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-2xl mx-auto">
                    {{ __('Parce qu’un projet ambitieux repose aussi sur la qualité des alliances qui le portent, nous privilégions des collaborations sérieuses, complémentaires et orientées résultats.') }}
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-5 sm:gap-6">
                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire1.png') }}" alt="Partenaire 1" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>

                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire2.png') }}" alt="Partenaire 2" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>

                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire3.png') }}" alt="Partenaire 3" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>

                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire4.png') }}" alt="Partenaire 4" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>

                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire5.png') }}" alt="Partenaire 5" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>

                <div class="group h-28 sm:h-32 rounded-[20px] border border-primary/10 bg-white flex items-center justify-center p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ asset('images/partners/partenaire6.png') }}" alt="Partenaire 6" class="max-h-14 sm:max-h-16 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                </div>
            </div>
        </div>
    </section>
</x-layout>
