<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnologyRequest;
use App\Models\Technology;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class TechnologyController extends Controller
{
    public function index(): View
    {
        $technologies = Technology::all();

        return view('technology.index', compact('technologies'));
    }

    public function create(): View
    {
        return view('technology.create');
    }

    public function store(TechnologyRequest $request): RedirectResponse
    {

        $fileName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/images/technologies', $fileName);


        $technology = new Technology();
        $technology->name = $request->name;
        $technology->file_url = $fileName;
        //$technology->project_id = 0;

        $technology->save();

        return redirect()->route('technology.index');
    }

    public function edit(Technology $technology): View
    {
        return view('technology.edit', compact('technology'));
    }

    public function update(TechnologyRequest $request, Technology $technology): RedirectResponse
    {
        $technology->update($request->all());

        return redirect()->route('technology.index')->with('success', 'technology updated!');
    }

    public function show(Technology $technology): View
    {
        return view('technology.show', compact('technology'));
    }

    public function destroy(Technology $technology): RedirectResponse
    {
        $technology->delete();

        return redirect()->route('technology.index')->with('danger', 'technology deleted!');
    }
}
