<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Models\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectsRequest $request)
    {
        try {
            $request->validate([
                'name'=>'required',
                'link'=> 'required',
                'images'=> 'required',
                'description'=> 'required',
                'status'=> 'required',
            ]);

            if($request->hasFile('images') && $request->file('images')->isValid()) {
                $extension = $request->images->extension();
                $imageName = md5($request->images->getClientOriginalName() . strtotime("now")) . '.' . $extension;

                $request->images->move(public_path('images/projects'), $imageName);

            }

            $project = new Projects([
                'name' => $request->get('name'),
                'link'=> $request->get('link'),
                'images'=> $imageName,
                'description'=> $request->get('description'),
                'status'=> $request->get('status'),
            ]);

            $project->save();
            return redirect()->route('projects.index')->with('success', 'Projeto adicionado com sucesso!');
        } catch (\Throwable $th) {
            dd(throw $th);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectsRequest  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectsRequest $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        try {
            $projects->delete();
            return redirect()->route('projects.index')->banner('Projeto removido com sucesso!');
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
