<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-user-tag"></i>
            {{ __('Editar Cliente - Zoo Center') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('cliente.actualizar', $cliente->id_cliente) }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                        <div>
                            <label class="font-bold text-lg" for="id_cliente">ID:</label>
                            <input id="id_cliente" name="id_cliente" type="text" class="px-3 py-2 w-full" value="{{$cliente->id_cliente}}" readonly>
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="nombre">NOMBRE:</label>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 w-full" value="{{$cliente->nombre}}">
                            @error('nombre')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="apellido">APELLIDO:</label>
                            <input id="apellido" name="apellido" type="text" class="px-3 py-2 w-full" value="{{$cliente->apellido}}">
                            @error('apellido')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="telefono">TELEFONO:</label>
                            <input id="telefono" name="telefono" type="text" class="px-3 py-2 w-full" value="{{$cliente->telefono}}">
                            @error('telefono')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="direccion">DIRECCION:</label>
                            <input id="direccion" name="direccion" type="text" class="px-3 py-2 w-full" value="{{$cliente->direccion}}">
                            @error('direccion')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="sexo">SEXO:</label>
                            <select id="sexo" name="sexo" class="px-3 py-2 w-full">
                                <option value="M" {{ $cliente->sexo === 'M' ? 'selected' : '' }}>M</option>
                                <option value="F" {{ $cliente->sexo === 'F' ? 'selected' : '' }}>F</option>
                            </select>
                            @error('sexo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="fecha">FECHA:</label>
                            <input id="fecha" name="fecha" type="date" class="px-3 py-2 w-full" value="{{$cliente->fecha}}">
                            @error('fecha')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div>
                            <label class="font-bold text-lg" for="correoelectronico">CORREO ELECTRONICO:</label>
                            <input id="correoelectronico" name="correoelectronico" type="text" class="px-3 py-2 w-full" value="{{$cliente->correoelectronico}}">
                            @error('correoelectronico')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="p-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
