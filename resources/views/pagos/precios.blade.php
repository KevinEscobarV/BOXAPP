<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden bg-black">
        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Planes</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-200">Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Sunt accusantium ratione optio fugit eum amet, debitis ea! Fugit sit
                    atque aperiam, adipisci facere libero totam. Odit officiis tenetur aliquid consequatur.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($planes as $plan)
                    <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                        <div class="h-full p-6 rounded-2xl border-4 border-mustard-500 bg-black flex flex-col relative overflow-hidden transform transition hover:scale-105 duration-300">
                            @if ($plan->popular)
                                <span
                                    class="bg-mustard-500 text-black px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">
                                    POPULAR
                                </span>
                            @endif
                            <div class="text-4xl font-extrabold leading-none tracking-tight text-center mb-4">
                                <span
                                    class="bg-clip-text text-transparent bg-gradient-to-r from-mustard-500 to-pink-500">
                                    {{ $plan->nombre }}
                                </span>
                            </div>
                            <h1
                                class="text-3xl text-white leading-none flex items-center pb-4 mb-4 border-b border-mustard-500">
                                <span>$ {{ number_format($plan->precio, 0, '.', ',') }} COP</span>
                                <span class="text-lg ml-1 font-normal text-white"> / {{ $plan->dias }} dias</span>
                            </h1>
                            <p class="flex items-center text-white mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                        viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>{{ $plan->referencia }}
                            </p>
                            <p class="flex items-center text-white mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                        viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>{{ $plan->descripcion }}
                            </p>
                            <p class="flex items-center text-white mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                        viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Valido por {{ $plan->dias }} dias
                            </p>

                            <x-button class="text-black font-semibold" href="{{ route('planes.payment', $plan) }}"
                                label="Ir a Pagar" primary />

                            <p class="text-xs text-gray-300 mt-3">La fuerza no viene de una capacidad física. Viene de
                                una voluntad indomable.
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
