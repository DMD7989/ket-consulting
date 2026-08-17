<x-layout>
    <x-slot:title>{{ __('Nos réalisations') }} | KET Consulting</x-slot:title>

    <section class="bg-white text-ink">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 sm:pt-20 pb-10 text-center">
            <span class="text-xs font-bold uppercase tracking-[0.24em] text-bordeaux">
                {{ __('Nos réalisations') }}
            </span>

            <h1 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-[1.08] text-ink">
                {{ __('Des projets concrets, pensés pour durer') }}
            </h1>

            <p class="mt-6 text-sm sm:text-base leading-relaxed text-ink/70 max-w-2xl mx-auto">
                {{ __('Un aperçu des projets menés par KET Consulting auprès des entreprises, institutions et organisations que nous accompagnons.') }}
            </p>
        </div>
    </section>

    @if ($projects->isEmpty())
        <section class="bg-white text-ink">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 sm:pb-32 text-center">
                <div class="rounded-[28px] border border-primary/10 bg-surface px-6 py-14 sm:py-16">
                    <p class="text-base sm:text-lg leading-relaxed text-ink/70 max-w-xl mx-auto">
                        {{ __('Nos prochaines réalisations seront bientôt présentées ici. Contactez-nous pour échanger dès maintenant sur votre projet.') }}
                    </p>

                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                        class="mt-8 inline-flex items-center justify-center rounded-full bg-primary px-6 py-3.5 text-sm font-bold uppercase tracking-[0.14em] text-white transition duration-300 hover:bg-bordeaux">
                        {{ __('Nous contacter') }}
                    </a>
                </div>
            </div>
        </section>
    @else
        <section class="bg-white text-ink border-t border-primary/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 sm:pb-32">
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($projects as $project)
                        <article class="overflow-hidden rounded-[24px] border border-primary/10 bg-white shadow-[0_12px_28px_rgba(91,60,154,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_38px_rgba(91,60,154,0.10)]">
                            @if ($project->image)
                                <div class="h-56 overflow-hidden">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                                </div>
                            @endif

                            <div class="p-6">
                                @if ($project->sector)
                                    <p class="text-[11px] uppercase tracking-[0.22em] text-bordeaux font-bold">
                                        {{ $project->sector }}
                                    </p>
                                @endif

                                <h3 class="mt-3 text-xl font-black tracking-tight text-primary">
                                    {{ $project->title }}
                                </h3>

                                <p class="mt-3 text-sm leading-relaxed text-ink/70">
                                    {{ $project->excerpt }}
                                </p>

                                @if ($project->tag_1 || $project->tag_2 || $project->tag_3)
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach (array_filter([$project->tag_1, $project->tag_2, $project->tag_3]) as $tag)
                                            <span class="rounded-full border border-primary/10 bg-surface px-3 py-1 text-[11px] font-semibold text-primary/70">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-layout>
