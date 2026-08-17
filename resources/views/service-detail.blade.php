<x-layout>
    <x-slot:title>{{ $service['title'] }} | KET Consulting</x-slot:title>

    <section class="bg-white text-ink">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-20 sm:pt-12 sm:pb-28">
            <nav class="flex flex-wrap items-center gap-2 text-xs text-primary/50" aria-label="{{ __('Fil d’Ariane') }}">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="hover:text-primary transition">{{ __('Accueil') }}</a>
                <span>/</span>
                <a href="{{ route('services', ['locale' => app()->getLocale()]) }}" class="hover:text-primary transition">{{ __('Nos services') }}</a>
                <span>/</span>
                <span class="text-primary/80">{{ $service['title'] }}</span>
            </nav>

            <div class="mt-10 grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux block mb-4">
                        {{ $service['label'] }}
                    </span>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.06]">
                        {{ $service['title'] }}
                    </h1>
                </div>

                <div class="lg:col-span-8">
                    <div class="space-y-6">
                        @foreach ($service['body'] as $paragraph)
                            <p class="text-base sm:text-lg leading-relaxed text-ink/75 max-w-3xl">
                                {{ $paragraph }}
                            </p>
                        @endforeach
                    </div>

                    @if(!empty($service['images'][0]))
                        <div class="mt-10 overflow-hidden rounded-[28px] border border-primary/10">
                            <img src="{{ $service['images'][0] }}" alt="{{ $service['title'] }}" class="h-72 sm:h-[420px] w-full object-cover">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- AUTRES EXPERTISES --}}
    <section class="bg-surface border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-primary/50 mb-4">
                {{ __('Nos autres expertises') }}
            </p>

            <div class="flex flex-wrap gap-x-8 gap-y-3">
                @foreach ($otherServices as $otherSlug => $otherService)
                    <a href="{{ route('services.show', ['locale' => app()->getLocale(), 'slug' => $otherSlug]) }}"
                        class="text-sm font-semibold text-primary/70 transition hover:text-primary">
                        {{ $otherService['label'] }}
                    </a>
                @endforeach

                <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                    class="text-sm font-semibold text-bordeaux transition hover:text-primary">
                    {{ __('Toutes nos solutions') }}
                </a>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="text-2xl sm:text-3xl font-black tracking-tight leading-[1.1] max-w-lg">
                    {{ __('Parlons de votre projet') }}
                </h2>

                <p class="mt-4 text-sm sm:text-base text-white/70 max-w-md">
                    {{ __('Contactez nos experts pour échanger sur vos besoins et obtenir une réponse adaptée à votre organisation.') }}
                </p>
            </div>

            <div class="flex flex-col items-start gap-4 sm:items-end">
                <a href="tel:+22382318124" class="text-lg font-bold text-white transition hover:text-white/80">
                    +223 82318124 / 69406504
                </a>

                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                    class="inline-flex items-center justify-center rounded-full bg-red px-6 py-3.5 text-sm font-bold uppercase tracking-[0.14em] text-white transition duration-300 hover:bg-red-dark">
                    {{ __('Nous contacter') }}
                </a>
            </div>
        </div>
    </section>
</x-layout>
