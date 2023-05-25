<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-user-tie"></i>
            {{ __(' Editar Proveedor - Zoo Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Mostrar mensaje de confirmación -->
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Éxito:</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            <!-- Mostrar mensaje de error -->
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error:</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            

            <form action="{{ route('proveedor.actualizar', $proveedor->id_proveedor) }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-6 grid-cols-1 gap-4 p-5">
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="id_personal">ID:</label>
                            <input id="id_proveedor" name="id_proveedor" type="text" class="px-3 py-2 w-full" value="{{$proveedor->id_proveedor}}" readonly>
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="nombre">NOMBRE:</label>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 w-full" value="{{$proveedor->nombre}}">
                            @error('nombre')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="apellido">TELEFONO:</label>
                            <input id="telefono" name="telefono" type="text" class="px-3 py-2 w-full" value="{{$proveedor->telefono}}">
                            @error('telefono')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="font-bold text-lg" for="telefono">DIRECCION:</label>
                            <input id="direccion" name="direccion" type="text" class="px-3 py-2 w-full" value="{{$proveedor->direccion}}">
                            @error('direccion')
                                <strong class="text-red-600">Dato Requerido</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="p-8">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
