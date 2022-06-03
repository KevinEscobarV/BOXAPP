<x-app-layout>

    <section class="text-gray-600 body-font overflow-hidden bg-black h-screen">
        <div class="max-w-7xl px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <div class="text-5xl font-extrabold leading-none tracking-tight text-center mb-4">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-mustard-500 to-pink-500">
                        {{ $plan->nombre }}
                    </span>
                </div>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-200">{{$plan->descripcion}}</p>
            </div>
            <div class="flex flex-wrap -m-4">
                    <div class="p-4 w-full">
                        <div class="h-full p-6 rounded-2xl border-4 border-mustard-500 bg-black flex flex-col relative overflow-hidden transform transition hover:scale-105 duration-300">
                            @if ($plan->popular)
                                <span
                                    class="bg-mustard-500 text-black px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">
                                    POPULAR
                                </span>
                            @endif
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
                            <div class="mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="198px" height="67px" viewBox="0 0 198 67" version="1.1">
                                    <title>Group 2</title>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-2" transform="translate(0.000000, 0.000000)">
                                            <path d="M6.5978,65.94836 L6.5978,57.52476 C6.5978,57.20116 6.8262,56.91956 7.1434,56.85396 C22.3366,53.70996 36.8562,53.70996 52.0522,56.85396 C52.3694,56.91956 52.5978,57.20116 52.5978,57.52476 L52.5978,65.94836 C52.5978,66.37996 52.2014,66.70276 51.779,66.61636 C36.7738,63.54676 22.4186,63.54716 7.4166,66.61636 C6.9938,66.70276 6.5978,66.37996 6.5978,65.94836" id="Fill-126-Copy" fill="#4666FF"/>
                                            <path d="M59.788,4.77532 L48.8364,46.60772 C45.462,47.18092 41.7052,47.30812 37.5664,46.60772 L29.926,18.52852 L22.158,46.60772 C18.7196,47.24452 15.0904,47.30812 11.0152,46.60772 L2.13162821e-14,4.77532 C3.5656,4.01132 7.004,4.07492 10.3148,4.77532 L17.4464,34.25532 L24.3228,4.77532 C27.7612,4.07492 31.836,4.01132 35.4016,4.77532 L43.6792,34.38292 L49.4732,4.77532 C53.0388,4.01132 56.5408,4.07492 59.788,4.77532" id="Fill-128-Copy" fill="#2C2A29"/>
                                            <path d="M82.75168,30.5624 C82.75168,25.3412 80.20488,22.2852 75.74768,22.2852 C71.41808,22.2852 68.74368,25.3412 68.74368,30.5624 C68.74368,36.038 71.35448,38.9036 75.74768,38.9036 C80.20488,38.9036 82.75168,36.038 82.75168,30.5624 M59.12928,30.5624 C59.12928,20.3748 66.00608,14.0076 75.74768,14.0076 C85.87168,14.0076 92.36608,20.6296 92.36608,30.5624 C92.36608,40.8136 85.80808,47.1808 75.74768,47.1808 C65.62408,47.1808 59.12928,40.6224 59.12928,30.5624" id="Fill-129-Copy" fill="#2C2A29"/>
                                            <path d="M145.26948,46.54408 L135.78228,46.54408 L135.78228,27.25168 C135.78228,23.87688 133.61748,22.15768 129.79708,22.15768 C128.01428,22.15768 126.29508,22.53968 124.89428,23.11288 C125.40388,24.51368 125.65868,26.04168 125.65868,27.69728 L125.65868,46.54408 L116.17148,46.54408 L116.17148,27.25168 C116.17148,23.87688 114.00648,22.15768 110.18608,22.15768 C108.72168,22.15768 107.32088,22.34888 106.11088,22.66728 L106.11088,46.54408 L96.49648,46.54408 L96.56048,18.21008 C100.38048,15.53568 106.36568,14.07128 111.39568,14.07128 C115.40748,14.07128 118.84548,15.40848 121.32868,17.57328 C124.57628,15.47208 129.09668,14.07128 132.91708,14.07128 C139.85748,14.07128 145.26948,17.76448 145.26948,23.87688 L145.26948,46.54408 Z" id="Fill-130-Copy" fill="#2C2A29"/>
                                            <path d="M173.67708,30.49872 C173.67708,25.78712 171.13028,21.71192 165.20868,21.71192 C163.87148,21.71192 162.34348,21.83952 160.75188,22.09392 L160.75188,38.71232 C162.02508,38.96712 163.55308,39.15792 165.46348,39.15792 C170.55708,39.15792 173.67708,36.80232 173.67708,30.49872 M183.22788,31.64472 C183.22788,40.30432 179.15268,47.18072 169.53828,47.18072 C166.60948,47.18072 163.42588,46.22552 160.75188,44.37912 L160.75188,56.15832 C158.58668,57.87752 153.68428,59.27832 151.13708,59.27832 L151.13708,16.55472 C154.25708,15.09032 159.35108,14.07152 164.63548,14.07152 C176.16028,14.07152 183.22788,20.37472 183.22788,31.64472" id="Fill-131-Copy" fill="#2C2A29"/>
                                            <path d="M187.42828,14.9628 C188.76548,14.3896 190.42068,14.0712 192.26748,14.0712 C194.11388,14.0712 195.70548,14.3896 197.04268,14.9628 L197.04268,46.544 L187.42828,46.544 L187.42828,14.9628 Z M187.30108,4.9028 C187.30108,2.2284 189.52948,-7.10542736e-15 192.20348,-7.10542736e-15 C194.94148,-7.10542736e-15 197.16988,2.1648 197.16988,4.9028 C197.16988,7.5132 194.94148,9.8052 192.20348,9.8052 C189.52948,9.8052 187.30108,7.6404 187.30108,4.9028 L187.30108,4.9028 Z" id="Fill-132-Copy" fill="#2C2A29"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-center">
                                <form>
                                    <script
                                      src="https://checkout.wompi.co/widget.js"
                                      data-render="button"
                                      data-public-key="{{$public_key}}"
                                      data-currency="COP"
                                      data-amount-in-cents="{{$amount_in_cents}}"
                                      data-reference="{{$reference}}"
                                      data-signature:integrity={{$signature}}
                                      data-redirect-url="{{$url_redirect}}"
                                      >
                                    </script>
                                  </form>
                            </div>
                            <p class="text-xs text-gray-300 mt-3">La fuerza no viene de una capacidad física. Viene de
                                una voluntad indomable.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    {{-- <section class="text-gray-600 body-font overflow-hidden">
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
                    <div class="p-4 w-full">
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
                            <span>{{ $plan->precio }} COP</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
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
                        <form>
                            <script
                              src="https://checkout.wompi.co/widget.js"
                              data-render="button"
                              data-public-key="{{$public_key}}"
                              data-currency="COP"
                              data-amount-in-cents="{{$amount_in_cents}}"
                              data-reference="{{$reference}}"
                              data-signature:integrity={{$signature}}
                              data-redirect-url="{{$url_redirect}}"
                              >
                            </script>
                          </form>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
            </div>
        </div>
        </div>
    </section> --}}

</x-app-layout>
