<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            PRECIOS
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Planes</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Sunt accusantium ratione optio fugit eum amet, debitis ea! Fugit sit
                    atque aperiam, adipisci facere libero totam. Odit officiis tenetur aliquid consequatur.</p>
                <div class="mx-auto border-2 border-orange-500 rounded overflow-hidden mt-6">
                    <p class="py-1 px-4 bg-orange-500 text-white">Mensual</p>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($planes as $plan)
                    <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                        @if ($plan->popular)
                            <div
                                class="h-full p-6 rounded-lg border-2 border-orange-500 flex flex-col relative overflow-hidden">
                            @else
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-200 flex flex-col relative overflow-hidden">
                        @endif
                        @if ($plan->popular)
                            <span
                                class="bg-orange-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                        @endif
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{ $plan->nombre }}</h2>
                        <h1
                            class="text-3xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$ {{ $plan->precio }} COP</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>{{ $plan->referencia }}
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>

                        <x-button
                        href="{{ route('planes.payment', $plan) }}"
                        label="Ir a Pagar"
                        orange
                        />

                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>

</x-app-layout>
