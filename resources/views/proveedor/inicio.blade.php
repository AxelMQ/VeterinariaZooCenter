<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <i class="fa-solid fa-user-tie"></i>
                 {{ __(' Proveedor - Zoo Center') }}
            </h2>
            <a class="px-3 py-2 bg-indigo-600 font-bold text-white rounded-lg" href="{{ route('proveedor.crear') }}">Registrar Proveedor</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200 text-gray-600">ID</th>
                            <th class="px-4 py-2 bg-gray-200 text-gray-600">Nombre</th>
                            <th class="px-4 py-2 bg-gray-200 text-gray-600">Teléfono</th>
                            <th class="px-4 py-2 bg-gray-200 text-gray-600">Dirección</th>
                            <th class="px-4 py-2 bg-gray-200 text-gray-600">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedor as $proveedorItem)
                            <tr>
                                <td class="border px-4 py-2">{{ $proveedorItem->id_proveedor }}</td>
                                <td class="border px-4 py-2">{{ $proveedorItem->nombre }}</td>
                                <td class="border px-4 py-2">{{ $proveedorItem->telefono }}</td>
                                <td class="border px-4 py-2">{{ $proveedorItem->direccion }}</td>
                                <td class="flex flex-wrap justify-between border px-4 py-2">
                                    <div class="flex">
                                        <a href="{{ route('proveedor.editar', $proveedorItem->id_proveedor) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            <i class="fa-solid fa-pen-to-square"></i> <!-- Icono editar -->
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <form action="{{ route('proveedor.eliminar', $proveedorItem->id_proveedor) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-trash"></i> <!-- Icono eliminar -->
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <script>
        @if (Session::has('eliminado'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('eliminado') }}");
        @endif

        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('new'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('new') }}");
        @endif
        
     </script>

</x-app-layout>
