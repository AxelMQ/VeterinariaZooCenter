<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-user-doctor"></i>{{ __('Registrar Personal - Zoo Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('personal.guardar') }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-5">
                        <div>
                            <label class="font-bold text-lg" for="id_personal">ID:</label>
                            <input id="id_personal" name="id_personal" type="text" class="px-3 py-2 w-full" placeholder="Ingresa ID">
                            @error('id_personal')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="nombre">NOMBRE:</label>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 w-full" placeholder="Ingresa nombre">
                            @error('nombre')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="apellido">APELLIDO:</label>
                            <input id="apellido" name="apellido" type="text" class="px-3 py-2 w-full" placeholder="Ingresa apellido">
                            @error('apellido')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="telefono">TELÉFONO:</label>
                            <input id="telefono" name="telefono" type="text" class="px-3 py-2 w-full" placeholder="Ingresa teléfono">
                            @error('telefono')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="sexo">SEXO:</label>
                            <select id="sexo" name="sexo" class="px-3 py-2 w-full">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                            @error('sexo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="tipo">TIPO:</label>
                            <select id="tipo" name="tipo" class="px-3 py-2 w-full">
                                <option value="S">Asistente</option>
                                <option value="V">Veterinario</option>
                                <option value="U">Auxiliar</option>
                            </select>
                            @error('tipo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div> 
                    </div>
                    <div class="p-8">
                        <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-3 rounded-lg">
                            <i class="fas fa-save"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
