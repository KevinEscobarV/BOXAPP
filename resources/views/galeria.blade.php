<x-app-layout>
    <section class="text-gray-400 bg-black body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Galeria</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Si no se pierde, no se puede disfrutar de las victorias. - Rafael Nadal.</p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2 transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" src="{{asset('images/galeria/1.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2 transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" src="{{asset('images/galeria/2.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-full transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full h-full object-cover object-center block rounded-lg" src="{{asset('images/galeria/3.jpg')}}">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full h-full object-cover object-center block rounded-lg" src="{{asset('images/galeria/4.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2 transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" src="{{asset('images/galeria/5.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2 transform transition hover:scale-110 duration-300">
                <img alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" src="{{asset('images/galeria/6.jpg')}}">
              </div>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>