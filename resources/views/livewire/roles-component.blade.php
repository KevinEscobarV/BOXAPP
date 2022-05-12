<div>

    

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-jet-form-section submit="save">
                <x-slot name="title">
                    Creacion de Roles
                </x-slot>
                <x-slot name="description">
                    Formulario para creacion de roles en la plataforma.
                </x-slot>
                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label for="name" value="Nombre Rol" />
                        <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="form.name" />
                        <x-jet-input-error for="form.name" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label value="Seleccionar los permisos del rol a crear" class="mb-3" />
                        <div class="flex">
                            @foreach ($permisos as $permiso)
                            <p class="mr-1">{{$permiso->description}}</p>
                            <x-jet-input type="checkbox" class="mt-1 block mr-4" name="permissions[]" value="{{$permiso->id}}" wire:model="form.permissions" />
                            @endforeach
                        </div>
                        <x-jet-input-error for="form.permissions" class="mt-2" />
                    </div>  
                </x-slot>
                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        ¡Guardado con Exito!
                    </x-jet-action-message>
            
                    <x-jet-button wire:loading.attr="disabled" wire:target="save">
                        {{ __('Save') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>

            <!-- Roles Table -->
            <div class="flex flex-col shadow-xl rounded-lg mt-6">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="flex bg-gray-700 px-2 py-4 sm:px-5">
                                <x-jet-input type="text" wire:model="search" class="placeholder:text-slate-400 w-full"
                                    placeholder="Buscar un rol por nombre" />
                                <div>
                                    <select wire:model="perPage"
                                        class="ml-6 border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                        class="outline-none">
                                        <option value="1">1 por página</option>
                                        <option value="5">5 por página</option>
                                        <option value="10">10 por página</option>
                                        <option value="15">15 por página</option>
                                        <option value="25">25 por página</option>
                                        <option value="50">50 por página</option>
                                        <option value="100">100 por página</option>
                                        <option value="200">200 por página</option>
                                    </select>
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-700 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($roles as $rol)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $rol->name }}
                                            </td>
                                            <td class="text-center text-sm">
                                                <div class="flex justify-center">
                                                    <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                                        wire:click="edit('{{ $rol->id }}')">
                                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                          </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($roles->hasPages())                            
                                <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                    {{ $roles->links()}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <x-edit-modal wire:model="open" maxWidth="3xl">

        <x-slot name="title">
            <div class="text-center">
                ROL SELECCIONADO
            </div>
            
        </x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-6">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input type="text" wire:model="editRol.name" class="w-full" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <x-jet-label value="Permisos del Rol" />
                <div class="flex mt-4">
                    @foreach ($permisos as $permiso)
                    <p class="mr-1">{{$permiso->description}}</p>
                    <x-jet-input type="checkbox" class="mt-1 block mr-4" name="permissions[]" value="{{$permiso->id}}" wire:model="editPermisos" />
                    @endforeach
                </div>
                <x-jet-input-error for="editPermisos" class="mt-2" />
            </div> 
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-edit-modal>

</div>
