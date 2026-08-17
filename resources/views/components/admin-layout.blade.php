<!DOCTYPE html>
<html lang="fr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ $title ?? 'Back-office' }} | KET Consulting</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-surface text-ink font-sans min-h-screen antialiased">
    <header class="border-b border-primary/10 bg-primary text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <a href="{{ route('admin.projects.index') }}" class="text-sm font-bold uppercase tracking-[0.18em]">
                KET Consulting <span class="text-white/50 font-normal">— Back-office</span>
            </a>

            @auth
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-white/70 transition hover:text-white">
                        Se déconnecter
                    </button>
                </form>
            @endauth
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        @if (session('success'))
            <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot }}
    </main>
</body>

</html>
