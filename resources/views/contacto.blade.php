<x-app-layout>
    <section class="text-gray-400 bg-black body-font relative min-h-screen">
        <div class="max-w-7xl px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
          <div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative ring ring-mustard-500 ring-offset-4 ring-offset-black">
            <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.4998700058145!2d-72.75227218523645!3d5.02235649635436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6ad923bd0d7093%3A0x4254cb2d5114646c!2sBox%2088!5e0!3m2!1ses-419!2sco!4v1654113905845!5m2!1ses-419!2sco" 
            style="filter: grayscale(0.5) contrast(1.2) opacity(0.9);"></iframe>
            
            <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
              <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-white tracking-widest text-xs">DIRECCIÓN</h2>
                <p class="mt-1">Cl. 18 # 15 - 15, Tauramena, Casanare</p>
              </div>
              <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-white tracking-widest text-xs">CORREO ELECTRONICO</h2>
                <a class="text-indigo-400 leading-relaxed">box88@email.com</a>
                <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">TELEFONO</h2>
                <p class="leading-relaxed">310-300-9241</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-white text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
            <div class="relative mb-4">
              <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
              <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
            <p class="text-xs text-gray-400 text-opacity-90 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
          </div>
        </div>
      </section>
</x-app-layout>