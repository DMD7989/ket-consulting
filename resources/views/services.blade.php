<x-layout>
    <x-slot:title>{{ __('Services') }} | KET Consulting</x-slot:title>

    <section class="bg-gradient-to-br from-[#F6F1EC] via-[#F3ECE6] to-[#EEE4DB] border-b border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 sm:pt-16 lg:pt-20 pb-16 sm:pb-20 lg:pb-24">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.05] text-primary">
                    {{ __('Nos') }} {{ __('Solutions') }} {{ __('Technologiques') }}
                </h1>

                <p class="mt-5 sm:mt-6 max-w-2xl mx-auto text-sm sm:text-base lg:text-lg leading-relaxed text-primary/70">
                    {{ __('KET Consulting accompagne les entreprises, institutions et organisations avec des services numériques, techniques et stratégiques adaptés à leurs enjeux de performance, de sécurité et de transformation.') }}
                </p>
            </div>

            <div class="mt-12 sm:mt-14 lg:mt-16 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-6">
                <article class="relative rounded-[22px] bg-white/85 p-7 sm:p-8 border border-primary/10 shadow-[0_10px_30px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(91,60,154,0.08)]">
                    <div class="text-bordeaux mb-6">
                        <svg class="w-11 h-11 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M8 7h8M8 11h8M8 15h5"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M6 3h8l4 4v10a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V3Z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="m13 16 4 4"></path>
                            <circle cx="11" cy="14" r="3"></circle>
                        </svg>
                    </div>

                    <h2 class="text-xl sm:text-2xl font-extrabold leading-tight tracking-tight text-bordeaux">
                        {{ __('Développement web et mobile') }}
                    </h2>

                    <p class="mt-4 text-sm sm:text-base leading-8 text-primary/80 max-w-md">
                        {{ __('Nous concevons des solutions web et applications robustes pour aider les entreprises, institutions et organisations à digitaliser leurs activités, améliorer leurs processus et soutenir leur croissance.') }}
                    </p>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                       class="mt-8 inline-flex items-center gap-2.5 text-sm sm:text-base font-medium text-bordeaux hover:text-bordeaux/80 transition">
                        {{ __('En savoir plus') }}
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m13 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </article>

                <article class="relative rounded-[22px] bg-white/85 p-7 sm:p-8 border border-primary/10 shadow-[0_10px_30px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(91,60,154,0.08)]">
                    <div class="text-bordeaux mb-6">
                        <svg class="w-11 h-11 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="m5 18 5-6 4 4 5-6"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M7 7h.01M17 7h.01M12 4v3M4 12h3M17 12h3M7 17h.01M17 17h.01"></path>
                        </svg>
                    </div>

                    <h2 class="text-xl sm:text-2xl font-extrabold leading-tight tracking-tight text-bordeaux">
                        {{ __('Infrastructures') }} &amp; {{ __('Réseaux') }}
                    </h2>

                    <p class="mt-4 text-sm sm:text-base leading-8 text-primary/80 max-w-md">
                        {{ __('Nous réalisons des études, le suivi et l’exécution de travaux de télécommunications et d’infrastructures afin de garantir des environnements fiables, performants et adaptés aux exigences opérationnelles.') }}
                    </p>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                       class="mt-8 inline-flex items-center gap-2.5 text-sm sm:text-base font-medium text-bordeaux hover:text-bordeaux/80 transition">
                        {{ __('En savoir plus') }}
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m13 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </article>

                <article class="relative rounded-[22px] bg-white/85 p-7 sm:p-8 border border-primary/10 shadow-[0_10px_30px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(91,60,154,0.08)] md:col-span-2 xl:col-span-1">
                    <div class="text-bordeaux mb-6">
                        <svg class="w-11 h-11 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="7" cy="7" r="3" stroke-width="1.6"></circle>
                            <circle cx="17" cy="7" r="2.5" stroke-width="1.6"></circle>
                            <circle cx="17" cy="17" r="3" stroke-width="1.6"></circle>
                            <circle cx="6" cy="17" r="2.5" stroke-width="1.6"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M9.8 7h4.7M8.9 9.2l5.2 5M8.5 15.6l5.3-1.2"></path>
                        </svg>
                    </div>

                    <h2 class="text-xl sm:text-2xl font-extrabold leading-tight tracking-tight text-bordeaux">
                        {{ __('Conseil') }} &amp; {{ __('Transformation Digitale') }}
                    </h2>

                    <p class="mt-4 text-sm sm:text-base leading-8 text-primary/80 max-w-md">
                        {{ __('Nous accompagnons les organisations dans la structuration de leurs projets, l’optimisation de leurs processus et la modernisation de leurs environnements numériques pour renforcer leur efficacité et leur compétitivité.') }}
                    </p>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                       class="mt-8 inline-flex items-center gap-2.5 text-sm sm:text-base font-medium text-bordeaux hover:text-bordeaux/80 transition">
                        {{ __('En savoir plus') }}
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m13 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="border-y border-primary/10 bg-[#f5f2eb] text-primary">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 lg:py-20">
            <div class="max-w-3xl mx-auto text-center">

                <h2 class="mt-5 text-2xl sm:text-3xl lg:text-4xl font-black tracking-[-0.03em] leading-[1.06] text-primary">
                    {{ __('Infrastructures, Réseaux') }}<br>
                    {{ __('& Cybersécurité') }}
                </h2>

                <div class="w-12 h-px bg-primary/15 mx-auto mt-5"></div>

                <p class="mt-5 max-w-xl mx-auto text-sm sm:text-base leading-relaxed text-primary/62">
                    {{ __('Nous concevons et sécurisons des infrastructures numériques capables de répondre aux enjeux de disponibilité, de performance, de protection des données et de continuité des activités.') }}
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 gap-y-9 lg:gap-x-10 lg:gap-y-12">
                <article class="group text-center">
                    <div class="mx-auto flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-[24px] border border-bordeaux/12 bg-white/80 text-bordeaux shadow-[0_10px_20px_rgba(91,60,154,0.04)] transition duration-300 group-hover:-translate-y-0.5 group-hover:border-bordeaux/20 group-hover:bg-white group-hover:shadow-[0_16px_28px_rgba(91,60,154,0.07)]">
                        <svg class="h-8 w-8 sm:h-10 sm:w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>

                    <h3 class="mt-5 text-lg sm:text-xl font-black tracking-tight text-primary leading-snug">
                        {{ __('Security by Design') }}
                    </h3>

                    <p class="mt-3 max-w-xs mx-auto text-sm leading-relaxed text-primary/60">
                        {{ __('Nous intégrons la sécurité dès la conception à travers des audits, des revues d’architecture et des tests d’intrusion afin de réduire les risques et renforcer la fiabilité des systèmes.') }}
                    </p>
                </article>

                <article class="group text-center">
                    <div class="mx-auto flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-[24px] border border-bordeaux/12 bg-white/80 text-bordeaux shadow-[0_10px_20px_rgba(91,60,154,0.04)] transition duration-300 group-hover:-translate-y-0.5 group-hover:border-bordeaux/20 group-hover:bg-white group-hover:shadow-[0_16px_28px_rgba(91,60,154,0.07)]">
                        <svg class="h-8 w-8 sm:h-10 sm:w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14-4V7a2 2 0 00-2-2H5a2 2 0 00-2 2v4"></path>
                        </svg>
                    </div>

                    <h3 class="mt-5 text-lg sm:text-xl font-black tracking-tight text-primary leading-snug">
                        {{ __('Réseaux critiques') }}
                    </h3>

                    <p class="mt-3 max-w-xs mx-auto text-sm leading-relaxed text-primary/60">
                        {{ __('Nous réalisons des études d’ingénierie réseau, des interconnexions inter-sites et des dispositifs techniques destinés à assurer la stabilité, la performance et la continuité de service.') }}
                    </p>
                </article>

                <article class="group text-center sm:col-span-2 xl:col-span-1">
                    <div class="mx-auto flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-[24px] border border-bordeaux/12 bg-white/80 text-bordeaux shadow-[0_10px_20px_rgba(91,60,154,0.04)] transition duration-300 group-hover:-translate-y-0.5 group-hover:border-bordeaux/20 group-hover:bg-white group-hover:shadow-[0_16px_28px_rgba(91,60,154,0.07)]">
                        <svg class="h-8 w-8 sm:h-10 sm:w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v2.5m0 13V21m9-9h-2.5M5.5 12H3m15.364 6.364-1.768-1.768M7.404 7.404 5.636 5.636m12.728 0-1.768 1.768M7.404 16.596l-1.768 1.768"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 7.5a4.5 4.5 0 0 0-2.85 7.982c.54.435.85 1.086.85 1.78V18h4v-.738c0-.694.31-1.345.85-1.78A4.5 4.5 0 0 0 12 7.5Z"></path>
                        </svg>
                    </div>

                    <span class="mt-5 block text-[10px] sm:text-[11px] uppercase tracking-[0.2em] text-bordeaux font-bold">
                        {{ __('Résilience') }}
                    </span>

                    <h3 class="mt-3 text-lg sm:text-xl font-black tracking-tight text-primary leading-snug">
                        {{ __('Souveraineté & résilience des infrastructures') }}
                    </h3>

                    <p class="mt-3 max-w-xs mx-auto text-sm leading-relaxed text-primary/60">
                        {{ __('Nous mettons en place des mécanismes de supervision, d’infogérance et de sauvegarde pour garantir la disponibilité des services, la protection des données et la continuité d’exploitation.') }}
                    </p>
                </article>
            </div>
        </div>
    </section>
</x-layout>
