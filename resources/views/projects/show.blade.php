{{-- resources/views/projects/show.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Proyecto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <ul class="list-disc pl-5">
                            <li><strong>{{ __('Nombre del Proyecto') }}:</strong> {{ $project->nombre_proyecto }}</li>
                            <li><strong>{{ __('Fuente de Fondos') }}:</strong>$ {{ number_format($project->fuente_fondos) }}</li>
                            <li><strong>{{ __('Monto Planificado') }}:</strong>$ {{ number_format($project->monto_planificado) }}</li>
                            <li><strong>{{ __('Monto Patrocinado') }}:</strong> ${{ number_format($project->monto_patrocinado) }}</li>
                            <li><strong>{{ __('Monto de Fondos Propios') }}:</strong> ${{ number_format($project->monto_fondos_propios) }}</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
