<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-user-doctor"></i>{{ __('Editar Personal - Zoo Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('personal.actualizar', $personal->id_personal) }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-6 grid-cols-1 gap-4 p-5">
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="id_personal">ID:</label>
                            <input id="id_personal" name="id_personal" type="text" class="px-3 py-2 w-full" value="{{$personal->id_personal}}" readonly>
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="nombre">NOMBRE:</label>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 w-full" value="{{$personal->nombre}}">
                            @error('nombre')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="apellido">APELLIDO:</label>
                            <input id="apellido" name="apellido" type="text" class="px-3 py-2 w-full" value="{{$personal->apellido}}">
                            @error('apellido')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="telefono">TELEFONO:</label>
                            <input id="telefono" name="telefono" type="text" class="px-3 py-2 w-full" value="{{$personal->telefono}}">
                            @error('telefono')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="sexo">SEXO:</label>
                            <select id="sexo" name="sexo" class="px-3 py-2 w-full">
                                <option value="M" {{ $personal->sexo === 'M' ? 'selected' : '' }}>M</option>
                                <option value="F" {{ $personal->sexo === 'F' ? 'selected' : '' }}>F</option>
                            </select>
                            @error('sexo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="tipo">TIPO:</label>
                            <select id="tipo" name="tipo" class="px-3 py-2 w-full">
                                <option value="S" {{ $personal->tipo === 'S' ? 'selected' : '' }}>Asistente</option>
                                <option value="V" {{ $personal->tipo === 'V' ? 'selected' : '' }}>Veterinario</option>
                                <option value="U" {{ $personal->tipo === 'U' ? 'selected' : '' }}>Auxiliar</option>
                            </select>
                            @error('tipo')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div> 
                    </div>
                    <div class="p-8">
                        <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-3 rounded-lg">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
