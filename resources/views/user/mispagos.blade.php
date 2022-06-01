<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis Pagos
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
                                            Metodo de Pago
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Total
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Fecha de Pago
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Referencia
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($pagos as $pago)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $pago->id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $pago->plan->nombre }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @switch($pago->status)
                                                    @case('Pendiente')
                                                    <p class="px-2 py-1 bg-orange-200 rounded-md">
                                                        Pendiente
                                                    </p>
                                                        @break
                                                    @case('Aprobado')
                                                    <p class="px-2 py-1 bg-green-200 rounded-md">
                                                        Aprobado
                                                    </p>
                                                        @break
                                                    @case('Declinado')
                                                    <p class="px-2 py-1 bg-red-200 rounded-md">
                                                        Declinado
                                                    </p>
                                                        @break
                                                    @case('Error')
                                                    <p class="px-2 py-1 bg-gray-200 rounded-md">
                                                        Error
                                                    </p>
                                                        @break
                                                    @case('Anulado')
                                                    <p class="px-2 py-1 bg-red-200 rounded-md">
                                                        Anulado
                                                    </p>
                                                    @default
                                                @endswitch
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ __(json_decode($pago->contenido)->payment_method_type) }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                $ {{ number_format(json_decode($pago->contenido)->amount_in_cents, 0, '.', ',') }} COP
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $pago->created_at->format('d/m/Y h:m A') }} - {{ $pago->created_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <p class="px-2 py-1 bg-green-200 rounded-md">
                                                    {{ json_decode($pago->contenido)->reference }}
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($pagos->hasPages())
                                <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                    {{ $pagos->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
