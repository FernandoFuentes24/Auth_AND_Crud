<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                    <div class="card-body">
                        <form action="{{ route('projects.update', $project->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-4">
                            <label for="nombre_proyecto" class="block text-gray-700 text-xm font-bold mb-2">{{__('Proyecto')}}</label>
                            <input type="text" name="nombre_proyecto" id="nombre_proyecto" class="shadow appearance-none border rounded w-10 py-2 px-3 text-gray-700" value="{{ $project->nombre_proyecto }}">
                            @error('nombre_proyecto')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="fuente_fondos" class="block text-gray-700 text-xm font-bold mb-2">{{__('Fondos')}}</label>
                            <input type="text" name="fuente_fondos" id="fuente_fondos" class="shadow appearance-none border rounded w-10 py-2 px-3 text-gray-700" value="{{ $project->fuente_fondos }}">     
                            @error('fuente_fondos')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_planificado" class="block text-gray-700 text-xm font-bold mb-2">{{__('Monto Planificado')}}</label>
                            <input type="text" name="monto_planificado" id="monto_planificado" class="shadow appearance-none border rounded w-10 py-2 px-3 text-gray-700" value="{{ $project->monto_planificado }}">     
                            @error('monto_planificado')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_patrocinado" class="block text-gray-700 text-xm font-bold mb-2">{{__('Monto Patrocinado')}}</label>
                            <input type="text" name="monto_patrocinado" id="monto_patrocinado" class="shadow appearance-none border rounded w-10 py-2 px-3 text-gray-700" value="{{ $project->monto_patrocinado }}">     
                            @error('monto_patrocinado')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_fondos_propios" class="block text-gray-700 text-xm font-bold mb-2">{{__('Monto de fondos propios')}}</label>
                            <input type="text" name="monto_fondos_propios" id="monto_fondos_propios" class="shadow appearance-none border rounded w-10 py-2 px-3 text-gray-700" value="{{ $project->monto_fondos_propios }}">     
                            @error('monto_fondos_propios')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                        </div>
                        <div class=""flex justify-end>
                            <a href="{{route('projects.index')}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">CANCELAR</a>
                            <button class="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded ml-2">{{$buttonText}}</button>
                        </div>
         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>