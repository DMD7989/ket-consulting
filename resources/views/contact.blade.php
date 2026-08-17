<x-layout>
    <x-slot:title>{{ __('Contact') }} | KET Consulting</x-slot:title>

    <section class="bg-[#FCFAF7]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
            @if(session('success'))
                <div class="mb-6 rounded-[20px] border border-emerald-200 bg-emerald-50 px-4 py-4 text-sm font-medium text-emerald-800">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit', ['locale' => request()->route('locale')]) }}"
                  method="POST"
                  class="space-y-5 sm:space-y-6 rounded-[28px] border border-primary/10 bg-white/85 p-5 sm:p-8 lg:p-10 shadow-[0_12px_32px_rgba(91,60,154,0.05)] backdrop-blur-sm">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                    <div>
                        <label for="name" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                            {{ __('Nom / Entreprise') }}
                        </label>
                        <input id="name"
                               type="text"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               class="w-full rounded-2xl border @error('name') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                        @error('name')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                            {{ __('Adresse Email') }}
                        </label>
                        <input id="email"
                               type="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               class="w-full rounded-2xl border @error('email') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                        @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="form-type" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                        {{ __('Type de demande') }}
                    </label>
                    <select name="type"
                            id="form-type"
                            required
                            class="w-full rounded-2xl border @error('type') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                        <option value="contact" @selected(old('type') === 'contact')>{{ __('Simple prise de contact') }}</option>
                        <option value="devis" @selected(old('type') === 'devis')>{{ __('Demande de devis personnalisé') }}</option>
                        <option value="autre" @selected(old('type') === 'autre')>{{ __('Autre') }}</option>
                    </select>
                    @error('type')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div id="service-selection-block" class="{{ old('type') === 'devis' ? '' : 'hidden' }}">
                    <label for="service" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                        {{ __('Expertise requise') }}
                    </label>
                    <select name="service"
                            id="service"
                            class="w-full rounded-2xl border @error('service') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                        <option value="Telecommunications" @selected(old('service') === 'Telecommunications')>{{ __('Télécommunication et réseaux') }}</option>
                        <option value="Donnees" @selected(old('service') === 'Donnees')>{{ __('Données et Analyse') }}</option>
                        <option value="Developpement" @selected(old('service') === 'Developpement')>{{ __('Développement web et mobile') }}</option>
                        <option value="Formations" @selected(old('service') === 'Formations')>{{ __('Formations') }}</option>
                    </select>
                    @error('service')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                        {{ __('Votre message') }}
                    </label>
                    <textarea id="message"
                              name="message"
                              required
                              rows="5"
                              class="w-full rounded-2xl border @error('message') border-red-400 @else border-primary/10 @enderror bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:ring-0">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-2">
                    <button type="submit"
                            class="inline-flex w-full sm:w-auto items-center justify-center rounded-full bg-primary px-6 py-3.5 text-xs sm:text-sm font-bold uppercase tracking-[0.18em] text-white transition duration-300 hover:bg-bordeaux">
                        {{ __('Envoyer la demande') }}
                    </button>
                </div>

                <p class="text-xs leading-relaxed text-neutral-900/68">
                    {{ __('Nous utilisons vos informations uniquement pour traiter votre demande et vous recontacter dans les meilleurs délais.') }}
                </p>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('form-type').addEventListener('change', function () {
            const block = document.getElementById('service-selection-block');
            this.value === 'devis'
                ? block.classList.remove('hidden')
                : block.classList.add('hidden');
        });
    </script>
</x-layout>
