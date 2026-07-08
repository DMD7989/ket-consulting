<x-layout>
    <x-slot:title>{{ __('À propos') }} | KET Consulting</x-slot:title>

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-primary text-white border-b border-white/10 min-h-[70vh] flex items-center">
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/about/baniere.jpg') }}"
                alt="{{ __('À propos de KET Consulting') }}"
                class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/45 via-black/50 to-primary/70"></div>
        </div>

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-32 text-center">
            <span class="inline-flex items-center rounded-full border border-white/20 bg-white/8 px-4 py-2 text-[11px] sm:text-xs font-bold uppercase tracking-[0.24em] text-white/75 mb-6">
                {{ __('À propos de KET Consulting') }}
            </span>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.05] max-w-4xl mx-auto">
                {{ __('Des solutions technologiques pensées pour les réalités du terrain.') }}
            </h1>

            <p class="mt-6 text-sm sm:text-lg lg:text-xl leading-relaxed text-white/85 max-w-3xl mx-auto">
                {{ __('KET Consulting accompagne les entreprises, institutions et organisations dans la conception, le déploiement et la sécurisation de solutions numériques, techniques et stratégiques adaptées à leurs contextes.') }}
            </p>
        </div>
    </section>

    {{-- MANIFESTE --}}
    <section class="bg-white text-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-primary/55 block mb-4">
                        {{ __('Qui nous sommes') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.06] max-w-md">
                        {{ __('Une entreprise construite autour de l’utilité, de la rigueur et de l’impact.') }}
                    </h2>
                </div>

                <div class="lg:col-span-8 space-y-6">
                    <p class="text-base sm:text-lg leading-relaxed text-primary/78 max-w-3xl">
                        {{ __('KET Consulting est une entreprise spécialisée dans les technologies de l’information et de la communication. Nous intervenons sur des problématiques concrètes où les organisations ont besoin d’outils fiables, d’infrastructures solides et d’un accompagnement capable de relier ambition stratégique et exécution technique.') }}
                    </p>

                    <p class="text-base sm:text-lg leading-relaxed text-primary/78 max-w-3xl">
                        {{ __('Notre travail se situe à l’intersection des télécommunications, du développement logiciel, de la cybersécurité, de l’analyse de données et du conseil. Cette transversalité nous permet d’apporter des réponses adaptées, durables et cohérentes avec les réalités opérationnelles de nos clients.') }}
                    </p>

                    <div class="border-l-4 border-primary bg-surface rounded-r-2xl px-6 sm:px-7 py-5 sm:py-6">
                        <p class="text-base sm:text-lg italic leading-relaxed text-primary max-w-2xl">
                            {{ __('Nous pensons que la valeur d’une solution technologique se mesure à sa capacité à être utile, compréhensible, fiable et durable dans son contexte réel d’utilisation.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISION / MISSION --}}
    <section class="relative bg-taupe text-white border-t border-white/10 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/12 to-transparent"></div>
            <div class="absolute top-0 right-0 h-80 w-80 rounded-full bg-white/[0.04] blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-white/55 block mb-4">
                        {{ __('Vision et mission') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.05] max-w-md">
                        {{ __('Un cap stratégique et une mission opérationnelle clairement assumés.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-white/68 max-w-md">
                        {{ __('Notre développement repose sur une ambition claire : concevoir des solutions utiles, fiables et durables au service de la transformation numérique.') }}
                    </p>
                </div>

                <div class="lg:col-span-8 grid md:grid-cols-2 gap-6 lg:gap-8">
                    <article class="rounded-[28px] border border-white/10 bg-white/[0.05] p-7 sm:p-10">
                        <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/45 block mb-4">
                            {{ __('Vision') }}
                        </span>

                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight leading-[1.08] max-w-xl">
                            {{ __('Devenir une référence fiable de l’innovation technologique appliquée.') }}
                        </h3>

                        <p class="mt-5 text-white/78 text-sm sm:text-base leading-relaxed max-w-2xl">
                            {{ __('Notre vision est de contribuer durablement à la modernisation des organisations à travers des solutions technologiques capables d’améliorer la performance, la lisibilité des opérations et la capacité d’évolution.') }}
                        </p>
                    </article>

                    <article class="rounded-[28px] border border-white/10 bg-white/[0.05] p-7 sm:p-10">
                        <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/45 block mb-4">
                            {{ __('Mission') }}
                        </span>

                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight leading-[1.08] max-w-xl">
                            {{ __('Concevoir, déployer et sécuriser des solutions adaptées aux besoins réels.') }}
                        </h3>

                        <p class="mt-5 text-white/78 text-sm sm:text-base leading-relaxed max-w-2xl">
                            {{ __('Notre mission est d’accompagner entreprises, institutions et organisations avec des services techniques et stratégiques capables de produire un impact concret, durable et mesurable.') }}
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>


    {{-- PRINCIPES --}}
    <section class="relative overflow-hidden bg-white text-primary border-t border-primary/10">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
            <div class="absolute -top-24 right-0 h-72 w-72 rounded-full bg-primary/[0.03] blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-primary/[0.025] blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid xl:grid-cols-12 gap-12 xl:gap-16 items-start">
                <div class="xl:col-span-4 xl:sticky xl:top-28">
                    <span class="inline-flex items-center rounded-full border border-primary/10 bg-primary/[0.03] px-4 py-2 text-[11px] sm:text-xs font-bold uppercase tracking-[0.24em] text-primary/60">
                        {{ __('Nos principes') }}
                    </span>

                    <h2 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.02] max-w-md">
                        {{ __('Les repères qui structurent notre manière d’intervenir.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-primary/65 max-w-md">
                        {{ __('Nos principes ne sont pas des formules abstraites. Ils guident nos choix, nos méthodes de travail et notre manière de construire des solutions adaptées.') }}
                    </p>

                    <div class="hidden xl:flex items-center gap-3 mt-10 text-primary/35">
                        <span class="h-px w-12 bg-primary/15"></span>
                        <span class="text-[11px] font-bold uppercase tracking-[0.24em]">
                            {{ __('Exigence & méthode') }}
                        </span>
                    </div>
                </div>

                <div class="xl:col-span-8">
                    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">
                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:bg-primary/[0.02]">
                            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/12 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <div class="flex items-start justify-between gap-6">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-primary/10 bg-primary/[0.04] text-primary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9Z" />
                                    </svg>
                                </div>
                            </div>

                            <h3 class="mt-10 text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Rigueur') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/70 max-w-xl">
                                {{ __('Une exigence constante sur la qualité des analyses, des déploiements et des livrables, afin de garantir des interventions fiables et bien structurées.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/28">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Qualité') }}
                                </span>
                            </div>
                        </article>

                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:bg-primary/[0.02]">
                            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/12 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <div class="flex items-start justify-between gap-6">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-primary/10 bg-primary/[0.04] text-primary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5V4H2v16h5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 20a4 4 0 0 1 8 0" />
                                    </svg>
                                </div>
                            </div>

                            <h3 class="mt-10 text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Proximité') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/70 max-w-xl">
                                {{ __('Une écoute active des besoins, du contexte et des contraintes réelles de chaque organisation pour proposer des réponses pertinentes.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/28">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Écoute') }}
                                </span>
                            </div>
                        </article>

                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:bg-primary/[0.02]">
                            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/12 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <div class="flex items-start justify-between gap-6">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-primary/10 bg-primary/[0.04] text-primary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v6" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.05 7.05 9.88 9.88" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h6" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.05 16.95 9.88 14.12" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-6" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.95 16.95 14.12 14.12" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12h-6" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.95 7.05 14.12 9.88" />
                                        <circle cx="12" cy="12" r="2.5" />
                                    </svg>
                                </div>
                            </div>

                            <h3 class="mt-10 text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Innovation utile') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/70 max-w-xl">
                                {{ __('Des solutions innovantes, mais toujours orientées vers l’usage, la clarté, la simplicité d’adoption et la valeur concrète pour les utilisateurs.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/28">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Valeur') }}
                                </span>
                            </div>
                        </article>

                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:bg-primary/[0.02]">
                            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/12 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <div class="flex items-start justify-between gap-6">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-primary/10 bg-primary/[0.04] text-primary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c4 2 6 4.5 6 8.5 0 4.25-2.55 7.26-6 9.5-3.45-2.24-6-5.25-6-9.5C6 7.5 8 5 12 3Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 12.25 11.25 13.75 14.75 10.25" />
                                    </svg>
                                </div>
                            </div>

                            <h3 class="mt-10 text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Durabilité') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/70 max-w-xl">
                                {{ __('Des interventions pensées pour rester pertinentes, fiables et utiles sur le long terme, avec une logique de continuité et de transfert de capacité.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/28">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Continuité') }}
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
