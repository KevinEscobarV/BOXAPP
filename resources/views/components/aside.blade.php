<aside class="flex-shrink-0 hidden w-52 bg-black border-r-4 border-mustard-500 md:block">

    <div class="flex flex-col h-full">

 
      <!-- Sidebar links -->
      <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-4 overflow-y-hidden hover:overflow-y-auto mt-4">

        @role('Administrador|Coach')
        <x-aside-link href="{{ route('admin.usuarios') }}" :active="request()->routeIs('admin.usuarios')">
          <x-slot name="path">
            <x-icon name="database" class="w-5 h-5" />
          </x-slot>
          Usuarios
        </x-aside-link>

        <x-aside-link href="{{ route('admin.roles') }}" :active="request()->routeIs('admin.roles')">
          <x-slot name="path">
            <x-icon name="users" class="w-5 h-5" />
          </x-slot>
          Roles
        </x-aside-link>
        
        <x-aside-link href="{{ route('admin.rendimientos') }}" :active="request()->routeIs('admin.rendimientos')">
          <x-slot name="path">
            <x-icon name="lightning-bolt" class="w-5 h-5" />
          </x-slot>
          Rendimientos
        </x-aside-link>
        @endrole
        
        <x-aside-link href="{{ route('user.perfil') }}" :active="request()->routeIs('user.perfil')">
          <x-slot name="path">
            <x-icon name="star" class="w-5 h-5" />
          </x-slot>
          Mis Datos
        </x-aside-link>

        <x-aside-link href="{{ route('user.pagos') }}" :active="request()->routeIs('user.pagos')">
          <x-slot name="path">
            <x-icon name="shopping-cart" class="w-5 h-5" />
          </x-slot>
          Mis Pagos
        </x-aside-link>

        <x-aside-link href="{{ route('user.planes') }}" :active="request()->routeIs('user.planes')">
          <x-slot name="path">
            <x-icon name="tag" class="w-5 h-5" />
          </x-slot>
          Mis Subscripciones
        </x-aside-link>

        {{-- <x-aside-dropdown>
          <x-slot name="path">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
          </x-slot>

          Gestion

          <x-slot name="content">
            <x-aside-dropdown-link href="{{ route('login') }}">
              Usuarios
            </x-aside-dropdown-link>
            <x-aside-dropdown-link href="{{ route('login') }}">
              Roles
            </x-aside-dropdown-link>
            <x-aside-dropdown-link href="{{ route('login') }}">
              Registros
            </x-aside-dropdown-link>

          </x-slot>
        </x-aside-dropdown> --}}

      </nav>

      <!-- Sidebar footer -->
      <div class="flex-shrink-0 px-2 py-4 space-y-2">
        <a href="{{route('home')}}" class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
          <span aria-hidden="true">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
          </span>
          <span>Inicio</span>
        </a>
      </div>
    </div>
  </aside>
