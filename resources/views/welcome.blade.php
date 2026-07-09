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

            <div class="absolute inset-0 bg-primary/45"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-primary/15 via-primary/35 to-primary/75"></div>
        </div>

        <div class="relative z-10 w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div class="max-w-5xl mx-auto text-center">
                    <div class="flex flex-col sm:flex-row sm:flex-wrap items-center justify-center gap-3 mb-6 sm:mb-8">
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex items-center justify-center rounded-lg bg-bordeaux px-5 py-3 text-sm font-bold text-white hover:bg-bordeaux/90 transition">
                            {{ __('Découvrir KET') }}
                        </a>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex items-center justify-center rounded-lg border border-white/35 bg-white/10 px-5 py-3 text-sm font-semibold text-white hover:bg-white/16 transition">
                            {{ __('Explorer nos solutions technologiques') }}
                        </a>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-6xl font-black leading-[1.08] tracking-tight text-white">
                        {{ __('Télécommunications stratégiques.') }}<br>
                        {{ __('Solutions numériques à fort impact.') }}
                    </h1>

                    <p class="mt-6 max-w-3xl mx-auto text-base sm:text-lg lg:text-xl leading-relaxed text-white/88">
                        {{ __('KET Consulting accompagne les entreprises, institutions et organisations avec des solutions innovantes en télécommunications, développement logiciel, cybersécurité, analyse des données et transformation numérique durable.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- PRESENTATION --}}
    <section class="bg-[#F6F1EC] text-primary border-t border-primary/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-5">
                        {{ __('Présentation') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] max-w-3xl">
                        {{ __('Une entreprise pensée pour l’impact numérique.') }}
                    </h2>

                    <p class="mt-8 text-base sm:text-lg lg:text-xl leading-relaxed text-primary/82 max-w-2xl">
                        {{ __('Basée à Bamako, KET Consulting conçoit et déploie des solutions technologiques adaptées aux réalités du terrain. Nous intervenons à la croisée des télécommunications, du développement logiciel, de la sécurité informatique et de l’accompagnement numérique.') }}
                    </p>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-primary/66 max-w-2xl">
                        {{ __('Notre approche privilégie la clarté, l’utilité et l’efficacité : des solutions concrètes, adaptées aux contraintes locales, mais pensées pour durer, évoluer et produire un impact mesurable.') }}
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex items-center justify-center rounded-lg bg-primary px-5 py-3 text-sm font-bold text-white hover:bg-primary-dark transition">
                            {{ __('En savoir plus') }}
                        </a>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex items-center justify-center rounded-lg border border-primary/15 bg-white px-5 py-3 text-sm font-semibold text-primary hover:bg-white/70 transition">
                            {{ __('Découvrir nos expertises') }}
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="relative">
                        <div class="absolute -inset-4 rounded-[36px] bg-primary/5 blur-2xl"></div>

                        <div
                            class="relative overflow-hidden rounded-[32px] border border-primary/10 shadow-[0_18px_40px_rgba(91,60,154,0.08)]"
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
                            }'
                        >
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
                                    class="absolute inset-0 w-full h-[320px] sm:h-[420px] lg:h-[560px] object-cover"
                                >
                            </template>

                            <div class="relative h-[320px] sm:h-[420px] lg:h-[560px]"></div>

                            <div class="absolute inset-0 bg-gradient-to-t from-primary/45 via-primary/10 to-transparent pointer-events-none"></div>

                            <div class="absolute left-4 right-4 bottom-4 sm:left-6 sm:right-auto sm:max-w-sm rounded-2xl border border-white/20 bg-white/14 backdrop-blur-md p-4 sm:p-5">
                                <p class="text-xs font-bold uppercase tracking-[0.22em] text-white/72 mb-2">
                                    {{ __('KET Consulting') }}
                                </p>
                                <p class="text-sm sm:text-base leading-relaxed text-white/92">
                                    {{ __('Des solutions numériques et techniques conçues pour répondre aux enjeux concrets des organisations.') }}
                                </p>
                            </div>

                            <div class="absolute bottom-4 right-4 sm:right-6 flex gap-2 z-10">
                                <template x-for="(slide, index) in slides" :key="'dot-' + index">
                                    <button
                                        type="button"
                                        @click="goTo(index)"
                                        :class="active === index ? 'bg-white w-6' : 'bg-white/40 w-2'"
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
    <section class="bg-[#EFE7DE] text-primary border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="max-w-3xl mx-auto mb-14 text-center">
                <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                    {{ __('Nos domaines d’expertise') }}
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08]">
                    {{ __('Des expertises structurées pour répondre aux enjeux numériques et techniques.') }}
                </h2>

                <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-primary/68 max-w-2xl mx-auto">
                    {{ __('KET Consulting intervient sur plusieurs champs complémentaires afin d’accompagner les organisations dans leurs projets numériques, techniques et opérationnels.') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8">
                {{-- Carte 1 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_36px_rgba(91,60,154,0.08)]">
                    <div class="relative h-52 overflow-hidden bg-[#E9DED3]">
                        <img
                            src="{{ asset('images/home/dev.jpg') }}"
                            alt="{{ __('Développement web et mobile') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Développement') }}
                        </p>

                        <h3 class="text-2xl font-black tracking-tight leading-tight text-primary">
                            {{ __('Développement web et mobile') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/72 max-w-md mx-auto">
                            {{ __('Conception d’applications web et mobiles performantes, robustes et adaptées aux réalités opérationnelles des entreprises, institutions et organisations.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                            class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-bordeaux hover:text-primary transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>

                {{-- Carte 2 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_36px_rgba(91,60,154,0.08)]">
                    <div class="relative h-52 overflow-hidden bg-[#E9DED3]">
                        <img
                            src="{{ asset('images/home/telecom.jpg') }}"
                            alt="{{ __('Télécommunications et infrastructures') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Télécommunications') }}
                        </p>

                        <h3 class="text-2xl font-black tracking-tight leading-tight text-primary">
                            {{ __('Télécommunications et infrastructures') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/72 max-w-md mx-auto">
                            {{ __('Études, suivi et exécution de travaux de télécommunications avec une exigence forte de rigueur, de qualité et de continuité de service.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                            class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-bordeaux hover:text-primary transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>

                {{-- Carte 3 --}}
                <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_36px_rgba(91,60,154,0.08)]">
                    <div class="relative h-52 overflow-hidden bg-[#E9DED3]">
                        <img
                            src="{{ asset('images/home/donnee.jpg') }}"
                            alt="{{ __('Sécurité, données et accompagnement') }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">
                            {{ __('Sécurité & données') }}
                        </p>

                        <h3 class="text-2xl font-black tracking-tight leading-tight text-primary">
                            {{ __('Sécurité, données et accompagnement') }}
                        </h3>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/72 max-w-md mx-auto">
                            {{ __('Cybersécurité, analyse de données, équipements informatiques et formation pour renforcer durablement la performance numérique des structures.') }}
                        </p>

                        <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                            class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-bordeaux hover:text-primary transition">
                            <span>{{ __('Découvrir') }}</span>
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- POURQUOI NOUS CHOISIR --}}
    <section class="relative bg-[#F6F1EC] text-primary border-t border-primary/10 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
            <div class="absolute -top-20 left-1/3 h-72 w-72 rounded-full bg-bordeaux/6 blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                        {{ __('Pourquoi nous choisir') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.06] max-w-md">
                        {{ __('Une expertise utile, structurée et orientée résultats.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-primary/68 max-w-md">
                        {{ __('Chaque intervention repose sur une méthode claire et une compréhension fine des enjeux techniques et organisationnels de nos clients.') }}
                    </p>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid sm:grid-cols-2 gap-5 lg:gap-6">
                        <div class="rounded-[22px] border border-primary/10 bg-white p-6 sm:p-7 shadow-[0_10px_24px_rgba(91,60,154,0.04)] transition hover:-translate-y-0.5 hover:shadow-[0_16px_30px_rgba(91,60,154,0.07)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Approche professionnelle') }}</h3>
                            <p class="text-primary/72 text-sm sm:text-base leading-relaxed">
                                {{ __('Des interventions menées avec méthode, précision et engagement sur la qualité.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-white p-6 sm:p-7 shadow-[0_10px_24px_rgba(91,60,154,0.04)] transition hover:-translate-y-0.5 hover:shadow-[0_16px_30px_rgba(91,60,154,0.07)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Vision stratégique') }}</h3>
                            <p class="text-primary/72 text-sm sm:text-base leading-relaxed">
                                {{ __('Des solutions conçues pour soutenir durablement la croissance et la visibilité des structures accompagnées.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-white p-6 sm:p-7 shadow-[0_10px_24px_rgba(91,60,154,0.04)] transition hover:-translate-y-0.5 hover:shadow-[0_16px_30px_rgba(91,60,154,0.07)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Expertise multidisciplinaire') }}</h3>
                            <p class="text-primary/72 text-sm sm:text-base leading-relaxed">
                                {{ __('Télécommunications, logiciels, sécurité, données et équipements dans une même dynamique de service.') }}
                            </p>
                        </div>

                        <div class="rounded-[22px] border border-primary/10 bg-white p-6 sm:p-7 shadow-[0_10px_24px_rgba(91,60,154,0.04)] transition hover:-translate-y-0.5 hover:shadow-[0_16px_30px_rgba(91,60,154,0.07)]">
                            <h3 class="text-lg sm:text-xl font-bold mb-3 text-primary">{{ __('Accompagnement durable') }}</h3>
                            <p class="text-primary/72 text-sm sm:text-base leading-relaxed">
                                {{ __('Une relation de proximité construite autour des besoins réels, du contexte et des objectifs du client.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
