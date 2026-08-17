<x-layout>
    <x-slot:title>{{ __('Blog') }} | KET Consulting</x-slot:title>

    <section class="bg-white text-ink">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 text-center">
            <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux">
                {{ __('Blog') }}
            </span>

            <h1 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] text-ink">
                {{ __('Nos actualités arrivent bientôt') }}
            </h1>

            <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-2xl mx-auto">
                {{ __('Nous préparons des articles sur nos projets, notre expertise technique et l’actualité du secteur. Revenez prochainement, ou abonnez-vous à notre newsletter pour être informé dès la mise en ligne.') }}
            </p>

            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}#newsletter"
                class="mt-8 inline-flex items-center justify-center rounded-full bg-primary px-6 py-3.5 text-sm font-bold uppercase tracking-[0.14em] text-white transition duration-300 hover:bg-bordeaux">
                {{ __('S’abonner à la newsletter') }}
            </a>
        </div>
    </section>
</x-layout>
