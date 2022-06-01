<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            RESPUESTA
        </h2>
    </x-slot>
    
    <p class="text-gray-700 ">
        {{ $data['status'] }}
    </p>
    
</x-app-layout>