<div>
    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <!-- Users Table -->
            <div class="flex flex-col shadow-xl rounded-lg">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="flex bg-gray-700 px-2 sm:px-5">
                                <x-input right-icon="user" label="Busqueda" placeholder="Buscar" />
                                <x-select
                                    class="ml-6"
                                    label="Select Status"
                                    placeholder="Select one status"
                                    :options="[
                                        ['name' => 'Active',  'id' => 1],
                                        ['name' => 'Pending', 'id' => 2],
                                        ['name' => 'Stuck',   'id' => 3],
                                        ['name' => 'Done',    'id' => 4],
                                    ]"
                                    option-label="name"
                                    option-value="id"
                                    wire:model.defer="model"
                                />
                            </div>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-700 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Usuario
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Peso en KG
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            BMI
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Grasa
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Musculo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Agua
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Grasa Visceral
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Huesos
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Metabolismo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Proteina
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Obesidad
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            LBM en KG
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Abdomen Medio
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Abdomen Bajo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Brazo Derecho
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Brazo Izquierdo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pierna Derecha
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pierna Izquierda
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($rendimientos as $rend)
                                        <tr>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-xl object-cover"
                                                            src="{{ $rend->usuario->profile_photo_url }}"
                                                            alt="{{ $rend->usuario->name }}">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $rend->usuario->name }}
                                                            {{ $rend->usuario->apellido }}</div>
                                                        <div class="text-sm text-gray-500">{{ $rend->usuario->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->peso }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->bmi }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->grasa }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->musculo }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->agua }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->grasa_visceral }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->huesos }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->metabolismo }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->proteina }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->obesidad }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->lbm }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->abdomen_medio }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->abdomen_bajo }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->brazo_derecho }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->brazo_izquierdo }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->pierna_derecha }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $rend->pierna_izquierda }}
                                            </td>
                                            {{-- <td class="text-center text-sm">
                                                <div class="flex justify-center">
                                                    <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                                        wire:click="mostrarUsuario('{{ $user->id }}')">
                                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    @can('edit.users')
                                                        <a class="text-red-500 cursor-pointer ml-3"
                                                            wire:click="$emit('statusUser', '{{ $user->id }}')">
                                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                            </svg>
                                                        </a>
                                                    @endcan
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                {{ $rendimientos->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
