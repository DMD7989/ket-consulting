<x-admin-layout :title="$project->exists ? 'Modifier la réalisation' : 'Nouvelle réalisation'">
    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-2xl font-black tracking-tight text-primary">
            {{ $project->exists ? 'Modifier la réalisation' : 'Nouvelle réalisation' }}
        </h1>

        <a href="{{ route('admin.projects.index') }}" class="text-sm font-semibold text-primary/60 transition hover:text-primary">
            ← Retour à la liste
        </a>
    </div>

    <form method="POST"
        action="{{ $project->exists ? route('admin.projects.update', $project) : route('admin.projects.store') }}"
        enctype="multipart/form-data"
        class="space-y-6 rounded-[28px] border border-primary/10 bg-white p-6 sm:p-8">
        @csrf
        @if ($project->exists)
            @method('PUT')
        @endif

        <div class="grid gap-6 sm:grid-cols-2">
            <div>
                <label for="title" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Titre
                </label>
                <input id="title" type="text" name="title" value="{{ old('title', $project->title) }}" required
                    class="w-full rounded-2xl border @error('title') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                @error('title')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Slug (facultatif — généré à partir du titre si vide)
                </label>
                <input id="slug" type="text" name="slug" value="{{ old('slug', $project->slug) }}"
                    class="w-full rounded-2xl border @error('slug') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                @error('slug')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="sector" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                Secteur (facultatif)
            </label>
            <input id="sector" type="text" name="sector" value="{{ old('sector', $project->sector) }}"
                class="w-full rounded-2xl border @error('sector') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
            @error('sector')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="excerpt" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                Résumé (affiché sur la carte)
            </label>
            <textarea id="excerpt" name="excerpt" required rows="3"
                class="w-full rounded-2xl border @error('excerpt') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">{{ old('excerpt', $project->excerpt) }}</textarea>
            @error('excerpt')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                Contenu détaillé (facultatif)
            </label>
            <textarea id="content" name="content" rows="8"
                class="w-full rounded-2xl border @error('content') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">{{ old('content', $project->content) }}</textarea>
            @error('content')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="image" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                Image (JPG, PNG ou WEBP — 2 Mo max)
            </label>

            @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" alt="" class="mb-3 h-32 w-auto rounded-xl border border-primary/10 object-cover">
            @endif

            <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp"
                class="w-full rounded-2xl border @error('image') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3 text-sm text-primary outline-none transition duration-200 file:mr-4 file:rounded-full file:border-0 file:bg-primary file:px-4 file:py-2 file:text-xs file:font-bold file:uppercase file:tracking-[0.1em] file:text-white">
            @error('image')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid gap-6 sm:grid-cols-3">
            <div>
                <label for="tag_1" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Tag 1
                </label>
                <input id="tag_1" type="text" name="tag_1" value="{{ old('tag_1', $project->tag_1) }}"
                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
            </div>

            <div>
                <label for="tag_2" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Tag 2
                </label>
                <input id="tag_2" type="text" name="tag_2" value="{{ old('tag_2', $project->tag_2) }}"
                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
            </div>

            <div>
                <label for="tag_3" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Tag 3
                </label>
                <input id="tag_3" type="text" name="tag_3" value="{{ old('tag_3', $project->tag_3) }}"
                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-6">
            <label class="flex items-center gap-2 text-sm font-semibold text-primary/80">
                <input type="checkbox" name="is_published" value="1" class="rounded border-primary/20"
                    @checked(old('is_published', $project->exists ? $project->is_published : true))>
                Publiée
            </label>

            <label class="flex items-center gap-2 text-sm font-semibold text-primary/80">
                <input type="checkbox" name="is_featured" value="1" class="rounded border-primary/20"
                    @checked(old('is_featured', $project->is_featured))>
                Mettre à la une
            </label>
        </div>

        <div class="pt-2">
            <button type="submit"
                class="inline-flex items-center justify-center rounded-full bg-red px-6 py-3.5 text-sm font-bold uppercase tracking-[0.14em] text-white transition duration-300 hover:bg-red-dark">
                {{ $project->exists ? 'Enregistrer les modifications' : 'Créer la réalisation' }}
            </button>
        </div>
    </form>
</x-admin-layout>
