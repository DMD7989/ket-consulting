<x-admin-layout title="Réalisations">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-black tracking-tight text-primary">Réalisations</h1>

        <a href="{{ route('admin.projects.create') }}"
            class="inline-flex items-center justify-center rounded-full bg-primary px-5 py-2.5 text-sm font-bold text-white transition duration-300 hover:bg-bordeaux">
            + Nouvelle réalisation
        </a>
    </div>

    @if ($projects->isEmpty())
        <div class="rounded-[24px] border border-primary/10 bg-white px-6 py-14 text-center text-sm text-ink/60">
            Aucune réalisation pour le moment.
        </div>
    @else
        <div class="overflow-x-auto rounded-[24px] border border-primary/10 bg-white">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-primary/10 text-xs uppercase tracking-[0.14em] text-primary/50">
                    <tr>
                        <th class="px-5 py-4 font-bold">Titre</th>
                        <th class="px-5 py-4 font-bold">Secteur</th>
                        <th class="px-5 py-4 font-bold">Statut</th>
                        <th class="px-5 py-4 font-bold">À la une</th>
                        <th class="px-5 py-4 font-bold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-primary/10">
                    @foreach ($projects as $project)
                        <tr>
                            <td class="px-5 py-4 font-semibold text-ink">{{ $project->title }}</td>
                            <td class="px-5 py-4 text-ink/70">{{ $project->sector ?: '—' }}</td>
                            <td class="px-5 py-4">
                                @if ($project->is_published)
                                    <span class="inline-flex rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Publiée</span>
                                @else
                                    <span class="inline-flex rounded-full bg-primary/5 px-3 py-1 text-xs font-semibold text-primary/60">Brouillon</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-ink/70">{{ $project->is_featured ? 'Oui' : 'Non' }}</td>
                            <td class="px-5 py-4">
                                <div class="flex items-center justify-end gap-4">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="font-semibold text-primary transition hover:text-bordeaux">
                                        Modifier
                                    </a>

                                    <form method="POST" action="{{ route('admin.projects.destroy', $project) }}"
                                        onsubmit="return confirm('Supprimer définitivement « {{ addslashes($project->title) }} » ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-semibold text-red-600 transition hover:text-red-800">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-admin-layout>
