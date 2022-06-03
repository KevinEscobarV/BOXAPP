<x-app-layout>
    <section class="bg-cover bg-center h-screen" style="background-image:url({{ asset('images/fondo2.jpg') }});">

        <div class="bg-black bg-opacity-80 h-screen flex items-center justify-center content-center">
            <div class="text-center">
                <h6 class="text-gray-300">¡Nueva Forma De Construir Un Estilo De Vida Saludable!</h6>

                <h1 class="text-white text-lg font-extrabold">ENTRENA EN BOX88</h1>

                <div class="flex justify-center mt-4 space-x-4">
                    @auth
                        @if (!auth()->user()->perfil)
                            <x-button outline icon="user" lg href="{{ route('user.perfil') }}" label="COMPLETA TU PERFIL"
                                primary />
                        @endif
                    @else
                    <x-button outline icon="user" lg href="{{ route('register') }}" label="REGISTRATE" primary />
                    <x-button lg href="{{ route('register') }}" label="SABER MAS" primary />
                    @endauth
                </div>
            </div>
        </div>

    </section>
    <section class="bg-black py-12">
        <div class="px-4 py-4 max-w-7xl mx-auto">
            <div class="md:grid md:grid-cols-6 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-3">
                    @auth
                        <h1 class="text-white text-lg font-extrabold">¡Ya eres parte de Nosotros!</h1>
                    @else
                        <h1 class="text-white text-lg font-extrabold">¿Quieres ser nuevo miembro?</h1>
                        <h1 class="text-gray-400 text-md font-extrabold">Registrate y ser parte de nosotros</h1>
                        <div class="mt-3">
                            <x-button icon="user" lg href="{{ route('register') }}" class="w-full"
                                label="REGISTRATE" primary />
                        </div>
                        <div class="mt-3">
                            <x-button icon="user" lg href="{{ route('login') }}" class="w-full"
                                label="INICIAR SESION" primary />
                        </div>
                    @endauth

                </div>
                <div class="mt-5 md:mt-0 md:col-span-3 border-l-2 border-gray-300 px-4">
                    <h1 class="text-white text-lg font-extrabold">HORAS DE SERVICIO</h1>
                    <h2 class="text-white text-md font-extrabold">Domingo : Cerrado</h2>
                    <h1 class="text-white text-md font-extrabold">Lunes - Viernes</h1>
                    <h2 class="text-gray-400 text-md font-extrabold">7:00 AM - 9:00 AM | 5:00 PM - 9:00 PM</h2>
                    <h1 class="text-white text-md font-extrabold">Sabado</h1>
                    <h2 class="text-gray-400 text-md font-extrabold">7:00 AM - 9:00 PM</h2>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
