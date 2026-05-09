<x-guest-layout>

    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-r from-cyan-400 via-pink-400 to-purple-500">

        <!-- LOGO -->
        <div class="mb-6">

            <img 
                src="https://i.pinimg.com/736x/2b/00/63/2b00636645d263ee71a8545953df42fc.jpg"
                alt="Granizado"
                class="w-28 h-28 rounded-3xl shadow-2xl border-4 border-white object-cover">

        </div>

        <!-- CARD LOGIN -->
        <div class="w-full sm:max-w-md bg-white/90 backdrop-blur-md shadow-2xl rounded-3xl px-10 py-8 border border-white">

            <!-- TITULO -->
            <div class="text-center mb-6">

                <h1 class="text-4xl font-extrabold text-pink-600">
                    🍧 GRANIZADOS RELOCOS 🍧
                </h1>

                <p class="text-gray-500 mt-2">
                    Inicia sesión y disfruta los sabores más refrescantes 😵✨
                </p>

            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>

                    <x-input-label 
                        for="email" 
                        :value="__('Correo electrónico')" 
                        class="text-pink-700 font-bold"
                    />

                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-2xl border-pink-200 shadow-sm focus:ring-pink-500 focus:border-pink-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- Password -->
                <div class="mt-5">

                    <x-input-label 
                        for="password" 
                        :value="__('Contraseña')" 
                        class="text-pink-700 font-bold"
                    />

                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-2xl border-pink-200 shadow-sm focus:ring-pink-500 focus:border-pink-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <!-- Remember -->
                <div class="block mt-5">

                    <label for="remember_me" class="inline-flex items-center">

                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rounded border-pink-300 text-pink-600 shadow-sm focus:ring-pink-500"
                            name="remember">

                        <span class="ms-2 text-sm text-gray-600">
                            Recordarme
                        </span>

                    </label>

                </div>

                <!-- BOTONES -->
                <div class="flex items-center justify-between mt-8">

                    @if (Route::has('password.request'))

                        <a
                            class="underline text-sm text-pink-600 hover:text-pink-800"
                            href="{{ route('password.request') }}">

                            ¿Olvidaste tu contraseña?

                        </a>

                    @endif

                    <button
                        type="submit"
                        class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-6 py-2 rounded-xl font-bold shadow-lg hover:scale-105 transition duration-300">

                        🚀 LOG IN

                    </button>

                </div>

            </form>

        </div>

    </div>

</x-guest-layout>