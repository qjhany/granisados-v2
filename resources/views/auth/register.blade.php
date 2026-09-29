<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-200">

    <!-- CARD PRINCIPAL -->
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- PARTE SUPERIOR -->
        <div class="bg-gradient-to-r from-cyan-400 via-pink-400 to-purple-500 h-44 flex items-center justify-center relative">

            <!-- IMAGEN -->
            <img
                src="https://i.pinimg.com/736x/2b/00/63/2b00636645d263ee71a8545953df42fc.jpg"
                alt="Granizado"
                class="w-28 h-28 rounded-3xl border-4 border-white shadow-xl absolute top-4">

        </div>

        <!-- CONTENIDO -->
        <div class="bg-pink-50 rounded-t-[40px] px-10 py-12 -mt-6 relative">

            <!-- TITULO -->
            <div class="text-center mb-8">

                <h1 class="text-5xl font-extrabold text-pink-600 leading-tight">
                    🍧 CREAR <br> CUENTA 🍧
                </h1>

                <p class="text-gray-500 text-lg mt-4">
                    Regístrate y disfruta los sabores más refrescantes 😵✨
                </p>

            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NOMBRE -->
                <div class="mb-6">

                    <x-input-label
                        for="name"
                        :value="__('Nombre')"
                        class="text-pink-600 font-bold text-lg"
                    />

                    <x-text-input
                        id="name"
                        class="block mt-2 w-full rounded-2xl border-pink-400 shadow-sm focus:ring-pink-500 focus:border-pink-500 py-3 px-4"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name" />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                </div>

                <!-- EMAIL -->
                <div class="mb-6">

                    <x-input-label
                        for="email"
                        :value="__('Correo electrónico')"
                        class="text-pink-600 font-bold text-lg"
                    />

                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-2xl border-pink-400 shadow-sm focus:ring-pink-500 focus:border-pink-500 py-3 px-4"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- PASSWORD -->
                <div class="mb-6">

                    <x-input-label
                        for="password"
                        :value="__('Contraseña')"
                        class="text-pink-600 font-bold text-lg"
                    />

                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-2xl border-pink-300 shadow-sm focus:ring-pink-500 focus:border-pink-500 py-3 px-4"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <!-- CONFIRMAR PASSWORD -->
                <div class="mb-8">

                    <x-input-label
                        for="password_confirmation"
                        :value="__('Confirmar contraseña')"
                        class="text-pink-600 font-bold text-lg"
                    />

                    <x-text-input
                        id="password_confirmation"
                        class="block mt-2 w-full rounded-2xl border-pink-300 shadow-sm focus:ring-pink-500 focus:border-pink-500 py-3 px-4"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div>

                <!-- BOTÓN -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-4 rounded-2xl text-xl font-bold shadow-lg hover:scale-105 transition duration-300">

                    🚀 REGISTRARSE

                </button>

                <!-- LOGIN -->
                <div class="text-center mt-6">

                    <a
                        href="{{ route('login') }}"
                        class="text-pink-600 hover:text-pink-800 font-semibold">

                        ¿Ya tienes cuenta? Inicia sesión

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>