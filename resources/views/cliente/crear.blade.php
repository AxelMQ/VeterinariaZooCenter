<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-user-tag"></i>
            {{ __('Registrar Cliente - Zoo Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('cliente.guardar') }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-5">
                        <div>
                            <label class="font-bold text-lg" for="id_cliente">ID:</label>
                            <input id="id_cliente" name="id_cliente" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa ID">
                            @error('id_cliente')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="nombre">NOMBRE:</label>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa nombre">
                            @error('nombre')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="apellido">APELLIDO:</label>
                            <input id="apellido" name="apellido" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa apellido">
                            @error('apellido')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="telefono">TELÉFONO:</label>
                            <input id="telefono" name="telefono" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa teléfono">
                            @error('telefono')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="direccion">DIRECCIÓN:</label>
                            <input id="direccion" name="direccion" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa dirección">
                            @error('direccion')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="sexo">SEXO:</label>
                            <select id="sexo" name="sexo" class="px-3 py-2 w-full">
                                <option value="" disabled selected>Selecciona sexo</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                            @error('sexo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="font-bold text-lg" for="fecha">FECHA:</label>
                            <input id="fecha" name="fecha" type="date" class="px-3 py-2 w-full">
                            @error('fecha')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="font-bold text-lg" for="correoelectronico">CORREO ELECTRÓNICO:</label>
                            <input id="correoelectronico" name="correoelectronico" type="text" class="px-3 py-2 w-full" 
                                placeholder="Ingresa correo electrónico">
                            @error('correoelectronico')
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
