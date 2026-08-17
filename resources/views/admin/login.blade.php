<!DOCTYPE html>
<html lang="fr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Connexion | KET Consulting</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary text-ink font-sans min-h-screen antialiased flex items-center justify-center px-4">
    <div class="w-full max-w-sm">
        <p class="text-center text-white/70 text-xs font-bold uppercase tracking-[0.24em] mb-6">
            KET Consulting — Back-office
        </p>

        <form method="POST" action="{{ route('admin.login') }}"
            class="rounded-[24px] border border-white/10 bg-white p-6 sm:p-8 shadow-[0_18px_40px_rgba(6,27,79,0.25)] space-y-5">
            @csrf

            <div>
                <label for="email" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Adresse e-mail
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full rounded-2xl border @error('email') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                @error('email')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                    Mot de passe
                </label>
                <input id="password" type="password" name="password" required
                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
            </div>

            <label class="flex items-center gap-2 text-sm text-primary/70">
                <input type="checkbox" name="remember" class="rounded border-primary/20">
                Se souvenir de moi
            </label>

            <button type="submit"
                class="w-full inline-flex items-center justify-center rounded-full bg-red px-6 py-3.5 text-sm font-bold uppercase tracking-[0.14em] text-white transition duration-300 hover:bg-red-dark">
                Se connecter
            </button>
        </form>
    </div>
</body>

</html>
