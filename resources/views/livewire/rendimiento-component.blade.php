<div>
    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <!-- Users Table -->
            <div class="flex flex-col shadow-xl rounded-lg">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="flex bg-black px-2 pt-4 sm:px-5">
                                <x-input right-icon="user" placeholder="Buscar" />
                                {{-- <x-select class="ml-6" placeholder="Select one status" :options="[
                                    ['name' => 'Active', 'id' => 1],
                                    ['name' => 'Pending', 'id' => 2],
                                    ['name' => 'Stuck', 'id' => 3],
                                    ['name' => 'Done', 'id' => 4],
                                ]"
                                    option-label="name" option-value="id" wire:model.defer="model" /> --}}
                            </div>
                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-black text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Usuario
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Acciones
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
                                                        <div class="text-sm text-gray-500">{{ $rend->usuario->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-sm">
                                                <div class="flex justify-center">
                                                    <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                                        wire:click="edit('{{ $rend->id }}')">
                                                        <x-icon name="pencil" class="w-6 h-6 mr-2" />
                                                    </a>
                                                    <a class="text-red-400 hover:text-red-600 cursor-pointer"
                                                        x-on:confirm="{
                                                            title: '??Est??s seguro de eliminar este rendimiento?',
                                                            acceptLabel: 'Confirmar',
                                                            rejectLabel: 'Cancelar',
                                                            icon: 'warning',
                                                            method: 'delete',
                                                            params: {{ $rend->id }}
                                                            }">
                                                        <x-icon name="trash" class="w-6 h-6" />
                                                    </a>
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

    <x-modal.card title="Edici??n de Rendimiento" max-width="4xl" blur wire:model.defer="open">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Peso" placeholder="Peso" wire:model="edit_form.peso" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="BMI" placeholder="BMI" wire:model="edit_form.bmi" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Grasa" placeholder="Grasa" wire:model="edit_form.grasa" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Musculo" placeholder="Musculo" wire:model="edit_form.musculo" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Agua" placeholder="Agua" wire:model="edit_form.agua" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Grasa Visceral" placeholder="Grasa Visceral" wire:model="edit_form.grasa_visceral" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Huesos" placeholder="Huesos" wire:model="edit_form.huesos" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Metabolismo" placeholder="Metabolismo" wire:model="edit_form.metabolismo" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Proteina" placeholder="Proteina" wire:model="edit_form.proteina" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Obesidad" placeholder="Obesidad" wire:model="edit_form.obesidad" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="LBM" placeholder="LBM" wire:model="edit_form.lbm" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Abdomen Medio" placeholder="Abdomen Medio" wire:model="edit_form.abdomen_medio" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Abdomen Bajo" placeholder="Abdomen Bajo" wire:model="edit_form.abdomen_bajo" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Brazo Derecho" placeholder="Brazo Derecho" wire:model="edit_form.brazo_derecho" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Brazo Izquierdo" placeholder="Brazo Izquierdo" wire:model="edit_form.brazo_izquierdo" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Pierna Derecha" placeholder="Pierna Derecha" wire:model="edit_form.pierna_derecha" />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-input label="Pierna Izquierda" placeholder="Pierna Izquierda"
                    wire:model="edit_form.pierna_izquierda" />
            </div>
        </div>
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <div class="flex">
                    <x-button flat label="Cancelar" x-on:click="close" class="mr-3" />
                    <x-button orange label="Guardar" wire:click="update" wire:loading.attr="disabled"
                        wire:target="update" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>


</div>
