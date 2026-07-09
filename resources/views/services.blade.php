<x-layout>
    <x-slot:title>{{ __('Services') }} | KET Consulting</x-slot:title>

    @php
        $services = [
            [
                'label' => __('DÉVELOPPEMENT WEB ET MOBILE'),
                'title' => __('Solutions web et mobiles sur mesure'),
                'description' => __('Conception et développement d’applications web et mobiles robustes, évolutives et centrées sur les besoins métier des organisations.'),
                'images' => [
                    asset('images/services/developpement-web-mobile/1.jpg'),
                    asset('images/services/developpement-web-mobile/2.jpg'),
                    asset('images/services/developpement-web-mobile/3.png'),
                ],
            ],
            [
                'label' => __('INFRASTRUCTURES & RÉSEAUX'),
                'title' => __('Architecture, réseaux et infrastructures critiques'),
                'description' => __('Déploiement d’infrastructures IT, interconnexions réseau et environnements techniques fiables pour soutenir la performance et la continuité des opérations.'),
                'images' => [
                    asset('images/services/infrastructures-reseaux/1.jpg'),
                    asset('images/services/infrastructures-reseaux/2.jpg'),
                    asset('images/services/infrastructures-reseaux/3.jpg'),
                ],
            ],
            [
                'label' => __('CONSEIL & TRANSFORMATION DIGITALE'),
                'title' => __('Pilotage et transformation des organisations'),
                'description' => __('Accompagnement stratégique, cadrage des projets et modernisation des outils pour accélérer la transformation digitale des organisations de manière durable.'),
                'images' => [
                    asset('images/services/conseil-transformation-digital/1.jpg'),
                    asset('images/services/conseil-transformation-digital/2.jpg'),
                    asset('images/services/conseil-transformation-digital/3.jpg'),
                ],
            ],
            [
                'label' => __('DATACENTER'),
                'title' => __('Hébergement et infrastructures Datacenter'),
                'description' => __('Conception, déploiement et gestion d’infrastructures d’hébergement sécurisées et performantes, garantissant disponibilité, fiabilité et continuité de service pour les données critiques des organisations.'),
                'images' => [
                    asset('images/services/datacenter/1.jpg'),
                    asset('images/services/datacenter/2.jpg'),
                    asset('images/services/datacenter/3.jpg'),
                ],
            ],
            [
                'label' => __('ANALYSE DE DONNÉES'),
                'title' => __('Analyse et valorisation des données'),
                'description' => __('Collecte, traitement et interprétation des données pour transformer l’information brute en aide à la décision, au service de la performance et de la stratégie des organisations.'),
                'images' => [
                    asset('images/services/analyse-donnees/1.jpg'),
                    asset('images/services/analyse-donnees/2.jpg'),
                    asset('images/services/analyse-donnees/3.jpg'),
                ],
            ],
            [
                'label' => __('FORMATIONS'),
                'title' => __('Formations professionnelles et académiques'),
                'description' => __('Programmes de formation adaptés aux étudiants comme aux professionnels, couvrant les domaines du numérique, des télécommunications, de la cybersécurité et du développement, pour renforcer durablement les compétences techniques.'),
                'images' => [
                    asset('images/services/formations/1.jpg'),
                    asset('images/services/formations/2.jpg'),
                    asset('images/services/formations/3.jpg'),
                ],
            ],
        ];
    @endphp

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

            <div class="mt-12 sm:mt-14 lg:mt-16">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="inline-flex items-center rounded-full border border-primary/10 bg-white/70 px-4 py-2 text-[11px] sm:text-xs font-bold uppercase tracking-[0.24em] text-primary/60">
                        {{ __('Nos services') }}
                    </span>
                </div>

                <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($services as $service)
                        <article class="group overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_18px_38px_rgba(91,60,154,0.10)]">
                            <div
                                x-data="serviceCarousel(@js($service['images']))"
                                x-init="init()"
                                class="relative h-52 overflow-hidden"
                            >
                                <template x-for="(image, index) in images" :key="index">
                                    <div
                                        x-show="active === index"
                                        x-transition:enter="transition-opacity ease-out duration-700"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-in duration-700"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        class="absolute inset-0"
                                    >
                                        <img
                                            :src="image"
                                            :alt="'{{ addslashes($service['title']) }}'"
                                            class="h-full w-full object-cover"
                                        >
                                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                                    </div>
                                </template>

                                <div class="absolute bottom-4 left-1/2 z-10 flex -translate-x-1/2 items-center gap-2">
                                    <template x-for="(image, index) in images" :key="'dot-' + index">
                                        <button
                                            type="button"
                                            @click="goTo(index)"
                                            :class="active === index ? 'bg-white scale-110' : 'bg-white/45 hover:bg-white/70'"
                                            class="h-2.5 w-2.5 rounded-full transition duration-300"
                                            :aria-label="'Slide ' + (index + 1)"
                                        ></button>
                                    </template>
                                </div>
                            </div>

                            <div class="px-6 py-7 text-center">
                                <p class="text-[11px] uppercase tracking-[0.24em] text-bordeaux font-bold">
                                    {{ $service['label'] }}
                                </p>

                                <h3 class="mt-4 text-2xl font-black tracking-tight leading-tight text-primary">
                                    {{ $service['title'] }}
                                </h3>

                                <p class="mt-4 text-sm sm:text-base leading-relaxed text-primary/68">
                                    {{ $service['description'] }}
                                </p>

                                <a
                                    href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                                    class="mt-6 inline-flex items-center justify-center gap-2 text-sm font-bold text-primary transition duration-300 hover:text-bordeaux"
                                >
                                    <span>{{ __('Découvrir') }}</span>
                                    <svg class="h-4 w-4 transition duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m13 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
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

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('serviceCarousel', (images = []) => ({
                    images,
                    active: 0,
                    autoplay: null,

                    init() {
                        if (!Array.isArray(this.images) || this.images.length <= 1) return;
                        this.start();
                    },

                    start() {
                        this.stop();
                        this.autoplay = setInterval(() => {
                            this.active = (this.active + 1) % this.images.length;
                        }, 4500);
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
                }));
            });
        </script>
    @endpush
</x-layout>
