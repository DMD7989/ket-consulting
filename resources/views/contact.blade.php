<x-layout>
    <x-slot:title>{{ __('Contact') }} | KET Consulting</x-slot:title>

    <section class="relative overflow-hidden border-b border-primary/10 bg-gradient-to-br from-[#F6F1EC] via-[#F3ECE6] to-[#EEE4DB] text-primary">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 opacity-[0.04] [background-image:linear-gradient(rgba(91,60,154,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(91,60,154,0.12)_1px,transparent_1px)] [background-size:28px_28px]"></div>
            <div class="absolute top-0 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full bg-bordeaux/8 blur-3xl"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 lg:py-28 text-center">
            <span class="inline-flex items-center rounded-full border border-primary/10 bg-white/70 px-4 py-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.22em] text-bordeaux">
                {{ __('Contact') }}
            </span>

            <h1 class="mt-6 text-3xl sm:text-5xl lg:text-6xl font-black tracking-[-0.04em] leading-[1.04] text-primary">
                {{ __('Parlons de votre projet') }}
            </h1>

            <p class="mt-5 max-w-2xl mx-auto text-sm sm:text-base lg:text-lg leading-relaxed text-primary/68">
                {{ __('Présentez-nous votre besoin, votre contexte ou votre idée. Notre équipe vous répondra avec une approche claire, structurée et adaptée à votre organisation.') }}
            </p>
        </div>
    </section>

    <section class="bg-[#FCFAF7]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4">
                    <span class="text-[11px] sm:text-xs font-bold text-bordeaux uppercase tracking-[0.24em] block mb-4">
                        01. {{ __('Échange') }}
                    </span>

                    <h2 class="text-2xl sm:text-4xl font-black tracking-[-0.03em] leading-[1.08] text-primary">
                        {{ __('Décrivez votre besoin en quelques lignes') }}
                    </h2>

                    <div class="w-12 h-px bg-primary/15 mt-5"></div>

                    <p class="mt-5 max-w-sm text-sm sm:text-base leading-relaxed text-primary/62">
                        {{ __('Qu’il s’agisse d’un besoin en développement, cybersécurité, infrastructure ou transformation digitale, nous revenons vers vous avec une réponse adaptée.') }}
                    </p>
                </div>

                <div class="lg:col-span-8">
                    @if(session('success'))
                        <div class="mb-6 rounded-[20px] border border-emerald-200 bg-emerald-50 px-4 py-4 text-sm font-medium text-emerald-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}"
                          method="POST"
                          class="space-y-5 sm:space-y-6 rounded-[28px] border border-primary/10 bg-white/85 p-5 sm:p-8 lg:p-10 shadow-[0_12px_32px_rgba(91,60,154,0.05)] backdrop-blur-sm">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                            <div>
                                <label class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                                    {{ __('Nom / Entreprise') }}
                                </label>
                                <input type="text"
                                       name="name"
                                       required
                                       class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:bg-white focus:ring-0">
                            </div>

                            <div>
                                <label class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                                    {{ __('Adresse Email') }}
                                </label>
                                <input type="email"
                                       name="email"
                                       required
                                       class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:bg-white focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                                {{ __('Type de demande') }}
                            </label>
                            <select name="type"
                                    id="form-type"
                                    required
                                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                                <option value="contact">{{ __('Simple prise de contact') }}</option>
                                <option value="devis">{{ __('Demande de devis personnalisé') }}</option>
                            </select>
                        </div>

                        <div id="service-selection-block" class="hidden">
                            <label class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                                {{ __('Expertise requise') }}
                            </label>
                            <select name="service"
                                    class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary outline-none transition duration-200 focus:border-bordeaux focus:ring-0">
                                <option value="Web">{{ __('Service_1_Title') }}</option>
                                <option value="Mobile">{{ __('Service_2_Title') }}</option>
                                <option value="Cyber">{{ __('Service_6_Title') }}</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-primary/70">
                                {{ __('Votre message') }}
                            </label>
                            <textarea name="message"
                                      required
                                      rows="5"
                                      class="w-full rounded-2xl border border-primary/10 bg-white px-4 py-3.5 text-sm text-primary placeholder:text-primary/35 outline-none transition duration-200 focus:border-bordeaux focus:ring-0"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                    class="inline-flex w-full sm:w-auto items-center justify-center rounded-full bg-primary px-6 py-3.5 text-xs sm:text-sm font-bold uppercase tracking-[0.18em] text-white transition duration-300 hover:bg-bordeaux">
                                {{ __('Envoyer la demande') }}
                            </button>
                        </div>

                        <p class="text-xs leading-relaxed text-primary/45">
                            {{ __('Nous utilisons vos informations uniquement pour traiter votre demande et vous recontacter dans les meilleurs délais.') }}
                        </p>
                    </form>
                </div>
            </div>
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
