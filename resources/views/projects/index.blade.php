<x-layout>
    <x-slot:title>{{ __('Réalisations') }} | KET Consulting</x-slot:title>

    <section class="relative overflow-hidden bg-[#07070A] text-white py-20 sm:py-28 lg:py-32 border-b border-white/10">
        <div class="absolute inset-0 bg-[radial-gradient(#161622_1px,transparent_1px)] bg-[size:24px_24px] opacity-30"></div>
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[1000px] h-[320px] bg-gradient-to-b from-bordeaux/20 to-transparent blur-[120px] rounded-full pointer-events-none"></div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[10px] sm:text-xs font-semibold uppercase tracking-[0.22em] text-gray-300 mb-6">
                {{ __('Portfolio & Réalisations') }}
            </span>

            <h1 class="text-3xl sm:text-6xl lg:text-7xl font-black tracking-tight leading-[1.05] bg-clip-text text-transparent bg-gradient-to-b from-white via-gray-200 to-gray-500">
                {{ __('Nos réalisations') }}
            </h1>

            <p class="mt-6 max-w-2xl mx-auto text-sm sm:text-lg text-gray-400 font-light leading-relaxed">
                {{ __('Découvrez une sélection de projets, d’accompagnements et de solutions conçus pour accélérer la transformation numérique de nos clients.') }}
            </p>
        </div>
    </section>

    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 sm:mb-14 flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <span class="text-xs font-bold text-bordeaux uppercase tracking-[0.24em] block mb-3">
                        01. {{ __('Projets publiés') }}
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-black text-gray-900 tracking-tight leading-tight">
                        {{ __('Des solutions concrètes, pensées pour durer') }}
                    </h2>
                </div>

                <p class="text-sm text-gray-500 max-w-md">
                    {{ __('Chaque réalisation reflète notre approche : rigueur technique, impact métier et design soigné.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                @forelse($projects as $project)
                    <article class="group overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-sm hover:shadow-2xl transition duration-300">
                        <div class="overflow-hidden bg-gray-100">
                            <img
                                src="{{ $project->image ? asset('storage/' . $project->image) : asset('images/projects/default.png') }}"
                                alt="{{ $project->title }}"
                                class="w-full h-56 sm:h-72 object-cover transition duration-700 group-hover:scale-105"
                            >
                        </div>

                        <div class="p-5 sm:p-8">
                            <div class="flex items-center justify-between gap-3 flex-wrap">
                                <span class="text-[10px] sm:text-xs font-bold text-bordeaux uppercase tracking-[0.22em]">
                                    {{ $project->sector ?: __('Projet digital') }}
                                </span>

                                @if($project->is_featured)
                                    <span class="inline-flex items-center rounded-full bg-bordeaux/10 px-3 py-1 text-[10px] sm:text-xs font-bold text-bordeaux uppercase tracking-wider">
                                        {{ __('À la une') }}
                                    </span>
                                @endif
                            </div>

                            <h3 class="text-lg sm:text-2xl font-black text-gray-900 mt-3 leading-tight">
                                {{ $project->title }}
                            </h3>

                            <p class="mt-3 text-sm text-gray-500 font-light leading-relaxed">
                                {{ $project->excerpt }}
                            </p>

                            @if($project->content)
                                <div class="mt-5 pt-5 border-t border-gray-100">
                                    <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                                        {{ $project->content }}
                                    </p>
                                </div>
                            @endif

                            <div class="mt-5 flex flex-wrap gap-2">
                                @foreach([$project->tag_1, $project->tag_2, $project->tag_3] as $tag)
                                    @if($tag)
                                        <span class="bg-gray-100 text-gray-600 text-[10px] sm:text-xs px-3 py-1 rounded-md font-medium">
                                            {{ $tag }}
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="lg:col-span-2 rounded-3xl border border-dashed border-gray-200 bg-gray-50 px-6 py-16 text-center">
                        <p class="text-lg font-bold text-gray-800">
                            {{ __('Aucune réalisation publiée pour le moment.') }}
                        </p>
                        <p class="mt-3 text-sm text-gray-500 max-w-xl mx-auto">
                            {{ __('Les projets ajoutés depuis l’administration apparaîtront automatiquement ici dès qu’ils seront marqués comme publiés.') }}
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
