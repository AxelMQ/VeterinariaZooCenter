<x-app-layout>
        <x-slot name="header">
            <h2 class="font-bold text-4xl text-gray-800 leading-tight text-center py-1">
                ¡Bienvenido a Zoo Center!
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex items-center">
                    <div class="w-1/2 p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Bienvenido a nuestra veterinaria</h2>
                        <p class="text-gray-700">
                            ¡Estamos aquí para cuidar y proteger a tus queridas mascotas! En nuestra veterinaria, contamos con un equipo de profesionales apasionados y dedicados a brindar la mejor atención médica y servicios para tu mascota. Ofrecemos una amplia gama de servicios, desde consultas veterinarias y vacunas hasta cirugías y cuidado de animales mayores.
                        </p>
                        <p class="text-gray-700">
                            Confía en nosotros para mantener a tus mascotas sanas y felices.
                        </p>
                    </div>
                    <div class="w-1/2">
                        <img src="{{ asset('imagenes/mascotaVet.jpg') }}" alt="Veterinaria" class="max-w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
        
</x-app-layout>

