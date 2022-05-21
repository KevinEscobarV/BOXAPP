<div>
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            @if (!$datos)
            <x-jet-form-section submit="save">
                <x-slot name="title">
                    Formulario de Perfil
                </x-slot>
                <x-slot name="description">
                    Formulario para creacion de perfil
                </x-slot>
                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-3">
                        <x-datetime-picker without-time label="Seleccione la Fecha de Ingreso"
                            placeholder="Fecha de Ingreso" parse-format="YYYY-MM-DD"
                            wire:model.defer="input.fecha_ingreso" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-select label="Seleccione una enfermedad" placeholder="Seleccione enfermedades"
                            wire:model="enfermedadesUser" multiselect>
                            @foreach ($enfermedades as $enfermedad)
                                <x-select.option label="{{ $enfermedad->nombre }}" value="{{ $enfermedad->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input right-icon="user" label="Cirugias" placeholder="Describa la cirugia"
                            wire:model="input.cirugias" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input right-icon="heart" label="Dolores" placeholder="Describa los dolores"
                            wire:model="input.dolores" />
                    </div>
                    <div class="col-span-6 sm:col-span-3 mb-3">
                        <x-jet-label value="Fuma" />
                        <x-toggle label="No / Si" lg wire:model.defer="input.fuma" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-select label="Consumo de Licor" placeholder="Seleccione una opcion" :options="[
                            ['name' => 'Nunca', 'id' => 1],
                            ['name' => 'Esporadicamente', 'id' => 2],
                            ['name' => 'Eventualmente', 'id' => 3],
                            ['name' => 'Regularmente', 'id' => 4],
                            ['name' => 'Siempre', 'id' => 5],
                        ]"
                            option-label="name" option-value="id" wire:model.defer="input.licor" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-select label="Consumo de Drogas" placeholder="Seleccione una opcion" :options="[
                            ['name' => 'Nunca', 'id' => 1],
                            ['name' => 'Esporadicamente', 'id' => 2],
                            ['name' => 'Eventualmente', 'id' => 3],
                            ['name' => 'Regularmente', 'id' => 4],
                            ['name' => 'Siempre', 'id' => 5],
                        ]"
                            option-label="name" option-value="id" wire:model.defer="input.drogas" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-select label="Realiza actividad fisica" placeholder="Seleccione una opcion" :options="[
                            ['name' => 'Nunca', 'id' => 1],
                            ['name' => 'Esporadicamente', 'id' => 2],
                            ['name' => 'Eventualmente', 'id' => 3],
                            ['name' => 'Regularmente', 'id' => 4],
                            ['name' => 'Siempre', 'id' => 5],
                        ]"
                            option-label="name" option-value="id" wire:model.defer="input.act_fisica" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input right-icon="user" label="Otras actividades fisicas"
                            placeholder="Describa la actividad fisica" wire:model="input.otras_act_fisica" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-datetime-picker without-time label="Fecha de ultima actividad fisica"
                            placeholder="Seleccione una fecha" parse-format="YYYY-MM-DD"
                            wire:model.defer="input.fecha_ultima_act_fisica" />
                    </div>
                </x-slot>
                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="perfilSaved">
                        ¡Guardado con Exito!
                    </x-jet-action-message>

                    <x-jet-button wire:loading.attr="disabled" wire:target="save">
                        {{ __('Save') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
            @endif

            @if ($datos)
                <!-- Perfil -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 bg-gray-800">
                        <h3 class="text-lg leading-6 font-medium text-white">Información del Usuario</h3>
                        <p class="mt-1 max-w-2xl text-sm text-white">Información personal del Usuario.</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Fecha Ingreso</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->fecha_ingreso_carbon->format('d / m / Y') }} - {{ $datos->fecha_ingreso_carbon->diffForHumans() }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Cirugias</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $datos->cirugias }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Dolores</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $datos->dolores }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Fuma</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->fuma_word }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Licor</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->licor_word }}
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Drogas</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->drogas_word }} 
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Ha realizado actividad fisica</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->act_fisica_word }}
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Cual actividad fisica</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->otras_act_fisica }}
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Fecha de ultima actvidad fisica</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $datos->fecha_ultima_act_fisica }}
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Enfermedades</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                        @foreach ($datos->enfermedades as $enfermedad)
                                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                <div class="w-0 flex-1 flex items-center">
                                                    <!-- Heroicon name: solid/paper-clip -->

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                    <span class="ml-2 flex-1 w-0 truncate"> {{ $enfermedad->nombre }}
                                                    </span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </dd>
                            </div>
                            
                        </dl>
                        
                    </div>
                    <div class="bg-gray-50 px-6 py-5 flex justify-end">
                        <x-button outline orange label="Editar Perfil" wire:click="edit('{{ $datos->id }}')" />
                    </div>
                </div>
            @endif
        </div>
        <form>
            <script
              src="https://checkout.wompi.co/widget.js"
              data-render="button"
              data-public-key="pub_test_X0zDA9xoKdePzhd8a0x9HAez7HgGO2fH"
              data-currency="COP"
              data-amount-in-cents="4950000"
              data-reference="4XMPGKWWPKWQ"
              data-signature:integrity="37c8407747e595535433ef8f6a811d853cd943046624a0ec04662b17bbf33bf5"
              >
            </script>
          </form>
    </div>

   

    <x-modal.card title="Edición de Perfil" max-width="4xl" blur wire:model.defer="open">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <x-datetime-picker without-time label="Seleccione la Fecha de Ingreso"
                    placeholder="Fecha de Ingreso" parse-format="YYYY-MM-DD"
                    wire:model="editPerfil.fecha_ingreso" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-select label="Seleccione una enfermedad" placeholder="Seleccione enfermedades"
                    wire:model.defer="editEnfermedades" multiselect>
                    @foreach ($enfermedades as $enfermedad)
                        <x-select.option label="{{ $enfermedad->nombre }}" value="{{ $enfermedad->id }}" />
                    @endforeach
                </x-select>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-input right-icon="user" label="Cirugias" placeholder="Describa la cirugia"
                    wire:model="editPerfil.cirugias" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-input right-icon="heart" label="Dolores" placeholder="Describa los dolores"
                    wire:model="editPerfil.dolores" />
            </div>
            <div class="col-span-6 sm:col-span-3 mb-3">
                <x-jet-label value="Fuma" />
                <x-toggle label="No / Si" lg wire:model="editPerfil.fuma" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-select label="Consumo de Licor" placeholder="Seleccione una opcion" :options="[
                    ['name' => 'Nunca', 'value' => 1],
                    ['name' => 'Esporadicamente', 'value' => 2],
                    ['name' => 'Eventualmente', 'value' => 3],
                    ['name' => 'Regularmente', 'value' => 4],
                    ['name' => 'Siempre', 'value' => 5],
                ]"
                    option-label="name" option-value="value" wire:model="editPerfil.licor" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-select label="Consumo de Drogas" placeholder="Seleccione una opcion" :options="[
                    ['name' => 'Nunca', 'id' => 1],
                    ['name' => 'Esporadicamente', 'id' => 2],
                    ['name' => 'Eventualmente', 'id' => 3],
                    ['name' => 'Regularmente', 'id' => 4],
                    ['name' => 'Siempre', 'id' => 5],
                ]"
                    option-label="name" option-value="id" wire:model="editPerfil.drogas" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-select label="Realiza actividad fisica" placeholder="Seleccione una opcion" :options="[
                    ['name' => 'Nunca', 'id' => 1],
                    ['name' => 'Esporadicamente', 'id' => 2],
                    ['name' => 'Eventualmente', 'id' => 3],
                    ['name' => 'Regularmente', 'id' => 4],
                    ['name' => 'Siempre', 'id' => 5],
                ]"
                    option-label="name" option-value="id" wire:model="editPerfil.act_fisica" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-input right-icon="user" label="Otras actividades fisicas"
                    placeholder="Describa la actividad fisica" wire:model="editPerfil.otras_act_fisica" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-datetime-picker without-time label="Fecha de ultima actividad fisica"
                    placeholder="Seleccione una fecha" parse-format="YYYY-MM-DD"
                    wire:model="editPerfil.fecha_ultima_act_fisica" />
            </div>
        </div>
     
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <div class="flex">
                    <x-button flat label="Cancelar" x-on:click="close" class="mr-3" />
                    <x-button orange label="Guardar" wire:click="update" wire:loading.attr="disabled" wire:target="update" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

</div>
