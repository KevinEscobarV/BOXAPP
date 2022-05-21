<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @auth
                    @if (!auth()->user()->perfil)
                        <div class="bg-gray-700 p-4 rounded-md flex justify-between items-center mb-5">
                            <p class="text-white">TIENES INGRESAR EL RESTO DE TUS DATOS</p>
                            <x-button info href="{{ route('user.perfil') }}">Editar Perfil</x-button>
                        </div>
                    @else
                        <div class="bg-gray-700 p-4 rounded-md flex justify-between items-center mb-5">
                            <p class="text-white">TU PERFIL ESTA COMPLETO</p>
                            <x-button info href="{{ route('user.perfil') }}">Ver Mi Perfil</x-button>
                        </div>
                    @endif
                @endauth
        </div>
    </div>
</x-app-layout>
