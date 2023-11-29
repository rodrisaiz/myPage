<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class ProjectController extends Controller
{

    public function index(): View
    {
        $projects = Project::with('technologies')->get();

        return view('project.index', compact('projects'));
    }

    public function create(): View
    {
        $technologies = Technology::all();

        return view('project.create', compact('technologies'));
    }

    public function store(ProjectRequest $request): RedirectResponse
    {

        $fileName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/images/projects', $fileName);


        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->file_url = $fileName;
        $project->web =  $request->web;

        $project->save();

        return redirect()->route('project.index');
    }

    public function edit(Project $project): View
    {
        return view('project.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project): RedirectResponse
    {
        $project->update($request->all());

        return redirect()->route('project.index')->with('success', 'Project updated!');
    }

    public function show(Project $project): View
    {
        return view('project.show', compact('project'));
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('project.index')->with('danger', 'Project deleted!');
    }
}
