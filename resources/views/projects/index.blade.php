<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Proyectos')}}
        </h2>
    </x-slot>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wireui.css') }}" rel="stylesheet">
    <style>
    
        .bg-blue-500 {
            background-color: #4299e1;
        }
        .bg-green-500 {
            background-color: #48bb78;
        }
        .bg-yellow-500 {
            background-color: #f6e05e;
        }
        .bg-red-500 {
            background-color: #f56565;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between mb-6">
                        <h1 class="text-2xl font-bold">Proyectos</h1>
                        <div>
                            <a href="{{ route('projects.getPDF') }}" target="_blank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Descargar PDF</a>
                            <a href="{{ route('projects.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Crear Proyecto</a>
                        </div>
                    </div>
                    <div class="mt-4">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2">Proyecto</th>
                                    <th class="px-4 py-2">Fondos</th>
                                    <th class="px-4 py-2">Monto Planificado</th>
                                    <th class="px-4 py-2">Monto Patrocinado</th>
                                    <th class="px-4 py-2">Monto de fondos propios</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @forelse ($projects as $project)
                                <tr>
                                    <td class="border px-4 py-2">{{$project->nombre_proyecto}}</td>
                                    <td class="border px-4 py-2">{{number_format($project->fuente_fondos)}}</td>
                                    <td class="border px-4 py-2">{{ number_format($project->monto_planificado) }}</td>
                                    <td class="border px-4 py-2">{{ number_format($project->monto_patrocinado) }}</td>
                                    <td class="border px-4 py-2">{{ number_format($project->monto_fondos_propios) }}</td>
                                    <td class="border px-4 py-2 flex justify-center gap-4">
                                        <a href="{{ route('projects.show',$project) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                                        <a href="{{ route('projects.edit',$project) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('projects.destroy',$project) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty 
                                <tr class="bg-red-400 text-white text-center">
                                    <td colspan="6" class="border px-4 py-2">No hay proyectos para mostrar</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($projects->hasPages())
                    <div class="text-xs font-semibold uppercase text-gray-400 bg-gray-50 px-4 py-2">
                        {{ $projects->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
