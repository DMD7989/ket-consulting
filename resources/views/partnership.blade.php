<x-layout>
    <x-slot:title>{{ __('Partenariat') }} | KET Consulting</x-slot:title>

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#f4f1ec] text-primary border-b border-primary/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16 sm:pt-28 sm:pb-20">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-flex items-center rounded-full border border-bordeaux/15 bg-white/70 px-4 py-2 text-[11px] font-bold uppercase tracking-[0.24em] text-bordeaux shadow-sm">
                    {{ __('Partenariat') }}
                </span>

                <h1 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.04]">
                    {{ __('Nous construisons avec') }}<br>
                    {{ __('les meilleurs partenaires') }}
                </h1>

                <p class="mt-6 max-w-3xl mx-auto text-sm sm:text-base lg:text-lg leading-relaxed text-primary/72">
                    {{ __('KET Consulting développe des collaborations solides avec des entreprises, institutions et acteurs technologiques qui partagent une même exigence de qualité, d’innovation et d’impact durable.') }}
                </p>
            </div>
        </div>
    </section>

    {{-- PARTNER SHOWCASE --}}
    <section class="bg-[#f4f1ec] text-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 sm:pb-28">
            <div class="rounded-[32px] border border-primary/10 bg-white/55 p-6 sm:p-8 lg:p-10 backdrop-blur-sm">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-12 items-center">
                    <div class="lg:col-span-5">
                        <div class="max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
                            <span class="text-[11px] font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                                {{ __('Nos partenaires') }}
                            </span>

                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black leading-[1.08] tracking-tight">
                                {{ __('Nous travaillons avec des partenaires de confiance') }}
                            </h2>

                            <p class="mt-6 text-sm sm:text-base leading-relaxed text-primary/72">
                                {{ __('Parce qu’un projet ambitieux repose aussi sur la qualité des alliances qui le portent, nous privilégions des collaborations sérieuses, complémentaires et orientées résultats.') }}
                            </p>

                            <p class="mt-5 text-sm leading-relaxed text-primary/62">
                                {{ __('Notre objectif est simple : associer les bonnes expertises, les bonnes méthodes et les bons relais pour offrir aux organisations des solutions utiles, crédibles et durables.') }}
                            </p>

                            <div class="mt-8">
                                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                                   class="inline-flex items-center justify-center rounded-lg border border-primary/20 bg-white px-6 py-3 text-xs sm:text-sm font-bold uppercase tracking-[0.08em] text-primary shadow-sm transition duration-300 hover:bg-primary hover:text-white">
                                    {{ __('Lire la suite') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-6 items-stretch">
                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire1.png') }}"
                                     alt="Partenaire 1"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>

                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire2.png') }}"
                                     alt="Partenaire 2"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>

                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire3.png') }}"
                                     alt="Partenaire 3"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>

                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire4.png') }}"
                                     alt="Partenaire 4"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>

                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire5.png') }}"
                                     alt="Partenaire 5"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>

                            <div class="group h-32 sm:h-36 lg:h-40 rounded-[24px] border border-primary/10 bg-white flex items-center justify-center p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                                <img src="{{ asset('images/partners/partenaire6.png') }}"
                                     alt="Partenaire 6"
                                     class="max-h-16 sm:max-h-20 w-auto object-contain opacity-80 transition duration-300 group-hover:opacity-100">
                            </div>
                        </div>

                        <p class="mt-6 text-center text-[10px] sm:text-xs uppercase tracking-[0.24em] text-primary/38">
                            {{ __('Quelques partenaires qui nous font confiance') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY PARTNER --}}
    <section class="bg-white text-primary border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
            <div class="max-w-3xl mx-auto text-center">
                <span class="text-[11px] font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                    {{ __('Pourquoi collaborer avec nous') }}
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight leading-[1.08]">
                    {{ __('Un cadre de collaboration sérieux, lisible et durable.') }}
                </h2>

                <p class="mt-6 text-sm sm:text-base leading-relaxed text-primary/68">
                    {{ __('Nous construisons des partenariats fondés sur la complémentarité des expertises, la rigueur d’exécution et une compréhension concrète des enjeux techniques, institutionnels et opérationnels.') }}
                </p>
            </div>

            <div class="mt-14 grid md:grid-cols-2 xl:grid-cols-4 gap-5 lg:gap-6">
                <article class="h-full rounded-[24px] border border-primary/10 bg-[#F6F1EC] p-6 sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">{{ __('Vision') }}</p>
                    <h3 class="text-lg sm:text-xl font-black leading-tight">{{ __('Une lecture claire des objectifs') }}</h3>
                    <p class="mt-4 text-sm leading-relaxed text-primary/70">
                        {{ __('Chaque partenariat est structuré autour d’une finalité précise, mesurable et utile pour les parties prenantes.') }}
                    </p>
                </article>

                <article class="h-full rounded-[24px] border border-primary/10 bg-[#F6F1EC] p-6 sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">{{ __('Méthode') }}</p>
                    <h3 class="text-lg sm:text-xl font-black leading-tight">{{ __('Une exécution encadrée') }}</h3>
                    <p class="mt-4 text-sm leading-relaxed text-primary/70">
                        {{ __('Nous mettons en place des modes de travail simples, suivis et adaptés à la réalité des projets.') }}
                    </p>
                </article>

                <article class="h-full rounded-[24px] border border-primary/10 bg-[#F6F1EC] p-6 sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">{{ __('Complémentarité') }}</p>
                    <h3 class="text-lg sm:text-xl font-black leading-tight">{{ __('Des expertises qui se renforcent') }}</h3>
                    <p class="mt-4 text-sm leading-relaxed text-primary/70">
                        {{ __('Nous privilégions les collaborations où les compétences s’additionnent réellement pour créer plus de valeur.') }}
                    </p>
                </article>

                <article class="h-full rounded-[24px] border border-primary/10 bg-[#F6F1EC] p-6 sm:p-7">
                    <p class="text-[11px] font-bold uppercase tracking-[0.22em] text-bordeaux mb-3">{{ __('Durabilité') }}</p>
                    <h3 class="text-lg sm:text-xl font-black leading-tight">{{ __('Des relations pensées sur le long terme') }}</h3>
                    <p class="mt-4 text-sm leading-relaxed text-primary/70">
                        {{ __('Notre ambition est de bâtir des alliances fiables, évolutives et ancrées dans la confiance.') }}
                    </p>
                </article>
            </div>
        </div>
    </section>
</x-layout>
