<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis Subscripciones
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Users Table -->
            <div class="flex flex-col shadow-xl rounded-lg">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-yellow-500 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            N°
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Plan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Fecha de Inicio
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Fecha de Finalización
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($planes as $plan)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $plan->id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $plan->nombre }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if ($plan->pivot->status)
                                                    <p class="px-2 py-1 bg-green-200 rounded-md text-center">
                                                        Activo
                                                    </p>
                                                @else
                                                    <p class="px-2 py-1 bg-red-200 rounded-md text-center">
                                                        Inactivo
                                                    </p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ Carbon\Carbon::parse($plan->pivot->fecha_inicio)->translatedFormat('j \\de F, Y') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $plan->pivot->fecha_fin }} - {{ Carbon\Carbon::parse($plan->pivot->fecha_fin)->diffForHumans() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- @if ($planes->hasPages())
                                <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                    {{ $planes->links() }}
                                </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>