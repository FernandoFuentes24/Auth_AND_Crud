<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use PDF;



class ProjectController extends Controller
{
    public function getPDF()
    {     
        $projects = Project::all(); 
    
        $pdf = PDF::loadView('projects.PDF_EXAMPLE', compact('projects'));

        return $pdf->stream('reporteProyectos.pdf');
    }
    
    public function index():Renderable
    {
        $projects = Project::paginate(1);
        return view('projects.index', compact('projects'));
    }

    public function create():Renderable
    {
        $project = new Project;
        $title=__('Crear proyecto');
        $action = route('projects.store');
        $buttonText=__('Crear proyecto');
        return view('projects.form',compact('project','title','action','buttonText'));
    }

    public function show(Project $project):Renderable
    {
        $project->load('user:id');
        return view('projects.show',compact('project'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre_proyecto' => 'required|string|max:255',
            'fuente_fondos' => 'required|string|max:255',
            'monto_planificado' => 'required|numeric',
            'monto_patrocinado' => 'required|numeric',
            'monto_fondos_propios' => 'required|numeric',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit(Project $project):Renderable{
        $title = __('Editar proyecto');
        $action = route('projects.update', $project);
        $buttonText = __('Actualizar proyecto');
        return view('projects.edit', compact('project', 'title', 'action', 'buttonText'));
    }   


    public function update(Request $request, Project $project): RedirectResponse
    {
        $request->validate([
            'nombre_proyecto' => 'required|string|max:255',
            'fuente_fondos' => 'required|string|max:255',
            'monto_planificado' => 'required|numeric',
            'monto_patrocinado' => 'required|numeric',
            'monto_fondos_propios' => 'required|numeric',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Proyecto actualizado exitosamente.');
    }



    public function destroy(Project $project)
    {
    $project->delete();

    return redirect()->route('projects.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
