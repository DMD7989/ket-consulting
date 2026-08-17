<x-layout>
    <x-slot:title>{{ __('À propos') }} | KET Consulting</x-slot:title>

    {{-- MANIFESTE --}}
    <section class="bg-white text-ink">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                        {{ __('Qui nous sommes') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.06] max-w-md">
                        {{ __('Une entreprise construite autour de l’utilité, de la rigueur et de l’impact.') }}
                    </h2>
                </div>

                <div class="lg:col-span-8 space-y-6">
                    <p class="text-base sm:text-lg leading-relaxed text-ink/75 max-w-3xl">
                        {{ __('KET Consulting est une entreprise spécialisée dans les technologies de l’information et de la communication. Nous intervenons sur des problématiques concrètes où les organisations ont besoin d’outils fiables, d’infrastructures solides et d’un accompagnement capable de relier ambition stratégique et exécution technique.') }}
                    </p>

                    <p class="text-base sm:text-lg leading-relaxed text-ink/75 max-w-3xl">
                        {{ __('Notre travail se situe à l’intersection des télécommunications, du développement logiciel, de la cybersécurité, de l’analyse de données et du conseil. Cette transversalité nous permet d’apporter des réponses adaptées, durables et cohérentes avec les réalités opérationnelles de nos clients.') }}
                    </p>

                    <div class="border-l-4 border-red bg-surface rounded-r-2xl px-6 sm:px-7 py-5 sm:py-6">
                        <p class="text-base sm:text-lg italic leading-relaxed text-primary max-w-2xl">
                            {{ __('Nous pensons que la valeur d’une solution technologique se mesure à sa capacité à être utile, compréhensible, fiable et durable dans son contexte réel d’utilisation.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISION / MISSION --}}
    <section class="bg-white text-ink border-y border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                        {{ __('Vision et mission') }}
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.05] max-w-md">
                        {{ __('Une vision stratégique et une mission opérationnelle clairement assumées.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-ink/70 max-w-md">
                        {{ __('Notre développement repose sur une ambition claire : concevoir des solutions utiles, fiables et durables au service de la transformation numérique.') }}
                    </p>
                </div>

                <div class="lg:col-span-8 grid md:grid-cols-2 gap-6 lg:gap-8">
                    <article class="rounded-[28px] border border-primary/10 bg-surface p-7 sm:p-10 transition duration-300 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                        <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-red block mb-4">
                            {{ __('Vision') }}
                        </span>

                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight leading-[1.08] max-w-xl text-ink">
                            {{ __('Devenir une référence fiable de l’innovation technologique appliquée.') }}
                        </h3>

                        <p class="mt-5 text-ink/70 text-sm sm:text-base leading-relaxed max-w-2xl">
                            {{ __('Notre vision est de contribuer durablement à la modernisation des organisations à travers des solutions technologiques capables d’améliorer la performance, la lisibilité des opérations et la capacité d’évolution.') }}
                        </p>
                    </article>

                    <article class="rounded-[28px] border border-primary/10 bg-surface p-7 sm:p-10 transition duration-300 hover:border-primary/20 hover:shadow-[0_16px_30px_rgba(6,27,79,0.10)]">
                        <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-red block mb-4">
                            {{ __('Mission') }}
                        </span>

                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight leading-[1.08] max-w-xl text-ink">
                            {{ __('Concevoir, déployer et sécuriser des solutions adaptées aux besoins réels.') }}
                        </h3>

                        <p class="mt-5 text-ink/70 text-sm sm:text-base leading-relaxed max-w-2xl">
                            {{ __('Notre mission est d’accompagner entreprises, institutions et organisations avec des services techniques et stratégiques capables de produire un impact concret, durable et mesurable.') }}
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- PRINCIPES --}}
    <section class="relative overflow-hidden bg-surface text-ink border-t border-primary/10">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
            <div class="absolute -top-24 right-0 h-72 w-72 rounded-full bg-primary/[0.04] blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-bordeaux/[0.04] blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
            <div class="grid xl:grid-cols-12 gap-12 xl:gap-16 items-start">
                <div class="xl:col-span-4 xl:sticky xl:top-28">
                    <span class="inline-flex items-center rounded-full border border-primary/10 bg-primary/[0.04] px-4 py-2 text-[11px] sm:text-xs font-bold uppercase tracking-[0.24em] text-primary/70">
                        {{ __('Nos principes') }}
                    </span>

                    <h2 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.02] max-w-md">
                        {{ __('Les repères qui structurent notre manière d’intervenir.') }}
                    </h2>

                    <p class="mt-6 text-sm sm:text-base lg:text-lg leading-relaxed text-ink/70 max-w-md">
                        {{ __('Nos principes ne sont pas des formules abstraites. Ils guident nos choix, nos méthodes de travail et notre manière de construire des solutions adaptées.') }}
                    </p>

                    <div class="hidden xl:flex items-center gap-3 mt-10 text-primary/40">
                        <span class="h-px w-12 bg-primary/20"></span>
                        <span class="text-[11px] font-bold uppercase tracking-[0.24em]">
                            {{ __('Exigence & méthode') }}
                        </span>
                    </div>
                </div>

                <div class="xl:col-span-8">
                    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">

                        {{-- RIGUEUR --}}
                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 shadow-[0_10px_28px_rgba(6,27,79,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_18px_36px_rgba(6,27,79,0.12)]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-red opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Rigueur') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-xl">
                                {{ __('Une exigence constante sur la qualité des analyses, des déploiements et des livrables, afin de garantir des interventions fiables et bien structurées.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/35">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Qualité') }}
                                </span>
                            </div>
                        </article>

                        {{-- PROXIMITÉ --}}
                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 shadow-[0_10px_28px_rgba(6,27,79,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_18px_36px_rgba(6,27,79,0.12)]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-red opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Proximité') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-xl">
                                {{ __('Une écoute active des besoins, du contexte et des contraintes réelles de chaque organisation pour proposer des réponses pertinentes.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/35">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Écoute') }}
                                </span>
                            </div>
                        </article>

                        {{-- INNOVATION UTILE --}}
                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 shadow-[0_10px_28px_rgba(6,27,79,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_18px_36px_rgba(6,27,79,0.12)]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-red opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Innovation utile') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-xl">
                                {{ __('Des solutions innovantes, mais toujours orientées vers l’usage, la clarté, la simplicité d’adoption et la valeur concrète pour les utilisateurs.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/35">
                                <span class="h-px flex-1 bg-primary/10"></span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                    {{ __('Valeur') }}
                                </span>
                            </div>
                        </article>

                        {{-- DURABILITÉ --}}
                        <article class="group relative overflow-hidden rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8 shadow-[0_10px_28px_rgba(6,27,79,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_18px_36px_rgba(6,27,79,0.12)]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-red opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>

                            <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-[1.08]">
                                {{ __('Durabilité') }}
                            </h3>

                            <p class="mt-4 text-sm sm:text-base leading-relaxed text-ink/70 max-w-xl">
                                {{ __('Des interventions pensées pour rester pertinentes, fiables et utiles sur le long terme, avec une logique de continuité et de transfert de capacité.') }}
                            </p>

                            <div class="mt-8 flex items-center gap-3 text-primary/35">
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
