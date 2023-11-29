<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTechnologyRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectTechnology;
use App\Models\Technology;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectTechnologyController extends Controller
{

    public function create(): View
    {
        $technologies = Technology::all();
        $projects = Project::all();

        return view('pivot.create', compact('technologies', 'projects'));
    }

    public function store(ProjectTechnologyRequest $request): RedirectResponse
    {

        $projectTechnology = new ProjectTechnology();
        $projectTechnology->project_id = $request->project_id;
        $projectTechnology->technology_id = $request->technology_id;
        $projectTechnology->save();

        return redirect()->route('project.index');
    }
}
