<div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Users Table -->
            <div class="flex flex-col shadow-xl rounded-lg">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="flex bg-gray-700 px-2 py-4 sm:px-5">
                                <x-jet-input type="text" wire:model="search" class="placeholder:text-slate-400 w-full"
                                    placeholder="Buscar un usuario por nombre, apellido, identificaion y correo" />
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
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Identificación
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Fecha Nacimiento
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-xl object-cover"
                                                            src="{{ $user->profile_photo_url }}"
                                                            alt="{{ $user->name }}">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                            {{ $user->apellido }}</div>
                                                        <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->identificacion }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ date('M/d/Y', strtotime($user->fecha_nacimiento)); }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if ($user->estado == true)
                                                    <span class="text-green-800 bg-green-300 rounded-md px-2 py-1">Activo</span>
                                                @else
                                                    <span class="text-orange-800 bg-orange-300 rounded-md px-2 py-1">Inactivo</span>
                                                @endif
                                            </td>
                                                <td class="text-center text-sm">
                                                    <div class="flex justify-center">
                                                            <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                                                wire:click="mostrarUsuario('{{ $user->id }}')">
                                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                  </svg>
                                                            </a>
                                                            <a class="text-red-500 cursor-pointer ml-3"
                                                                wire:click="$emit('statusUser', '{{ $user->id }}')">
                                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                                  </svg>
                                                            </a>
                                                    </div>
                                                </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <x-edit-modal wire:model="open" maxWidth="5xl">

        <x-slot name="title">
            
        </x-slot>

        <x-slot name="content">

            <div class="col-span-6 sm:col-span-6">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <div class="flex justify-center items-center">
                    <img class="h-56 w-56 rounded-xl object-cover object-center"
                    src="{{ $urlPhoto }}" alt="">
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.name" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Apellido
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.apellido" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Identificación
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.identificacion" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Fecha de Nacimiento
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.fecha_nacimiento" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Email
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.email" class="w-full" disabled />
            </div>

        </x-slot>

        <x-slot name="footer">
           
        </x-slot>

    </x-edit-modal>

    @push('script')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('statusUser', userId => {
            Swal.fire({
                title: '¿Estas Seguro?',
                text: "¡Cambiaras el estado del usuario!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, Cambiar estado de Usuario!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('componente-usuarios', 'cambiarEstado', userId)
                    Swal.fire(
                        '¡Estado Cambiado!',
                        'Se ha cambiado correctamente.',
                        'success'
                    )
                }
            })
        })
        </script>
    @endpush
    
</div>
