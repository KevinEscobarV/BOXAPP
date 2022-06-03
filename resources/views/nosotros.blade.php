<x-app-layout>
    <section class="bg-black py-12 h-screen">
        <div class="px-4 py-4 max-w-7xl mx-auto">
            <div class="flex justify-center mb-12">
                <img class="h-64" src="{{asset('images/BOX88-V2.png')}}" alt="logo-box">
            </div>
            <div class="md:grid md:grid-cols-6 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <h1 class="text-white text-lg font-extrabold">Misión:</h1>
                    <p class="text-gray-400 text-md font-extrabold text-justify">
                        Nuestra misión es que los socios progresen de forma
                        constante y evolutiva su condición física, dándoles de una perfecta base física que les permita
                        afrontar cualquier reto. Optimizamos el potencial físico en todos nuestros usuarios hasta
                        límites inimaginables, retando su cuerpo y mente al punto de priorizar la actividad física en
                        sus vidas.
                    </p>
                    <h1 class="text-white text-lg font-extrabold mt-4">Visión:</h1>
                    <p class="text-gray-400 text-md font-extrabold text-justify">
                        Nuestra estrategia es tener centros de entrenamientos de
                        referencia nivel departamental en todas las especialidades de entrenamiento que practicamos
                        crossfit y entrenamiento funcional. Ponemos en marcha iniciativas constantes para la mejora y el
                        bienestar de todos los deportistas que depositan su confianza en nosotros y nos eligen como su
                        prioridad para sentirse bien.
                    </p>
                    <h1 class="text-white text-lg font-extrabold mt-4">Objetivo:</h1>
                    <p class="text-gray-400 text-md font-extrabold text-justify">
                        Nos enfocamos en ayudar a mejorar el estilo de vida de
                        las personas a través de la actividad física, desarrollando cada una de las cualidades de
                        nuestros usuarios.
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <img class="rounded-t-lg h-72 w-full object-cover" src="{{ asset('images/coach.jpg') }}"
                                alt="">
                            <div class="bg-white p-4 rounded-b-lg">
                                <div class="flex justify-between items-center">
                                    <p>Alejandro Londoño</p>
                                    <x-icon name="home" class="w-5 h-5 text-gray-500" />
                                </div>
                                <div class="flex justify-between items-center text-gray-500">
                                    <p>Coach</p>
                                    <x-icon name="home" class="w-5 h-5" />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <img class="rounded-t-lg h-72 w-full object-cover"
                                src="{{ asset('images/Auxiliares.jpg') }}" alt="">
                                <div class="bg-white p-4 rounded-b-lg">
                                    <div class="flex justify-between items-center">
                                        <p>Auxiliares</p>
                                        <x-icon name="home" class="w-5 h-5 text-gray-500" />
                                    </div>
                                    <div class="flex justify-between items-center text-gray-500">
                                        <p>Staff</p>
                                        <x-icon name="home" class="w-5 h-5" />
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
