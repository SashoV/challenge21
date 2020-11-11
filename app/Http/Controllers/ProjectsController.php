<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\CreateProjectFormRequest;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('sessionEmail')) {
            $projects = Project::all();
            return view('projects', ['title' => 'Projects', 'projects' => $projects]);
        } else {
            return redirect(route('admin'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->session()->has('sessionEmail')) {
        return view('create', ['title' => 'Create Page']);
        } else {
            return redirect('/admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectFormRequest $request)
    {
        $input = $request->all();

        $project = new Project();
        $project->name = $input['name'];
        $project->subtitle = $input['subtitle'];
        $project->image_url = $input['image_url'];
        $project->project_url = $input['project_url'];
        $project->description = $input['description'];
        $project->save();

        $request->session()->flash('success', 'Проектот е успешно додаден');
        return redirect('/projects/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProjectFormRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->name = $request->get('name');
        $project->subtitle = $request->get('subtitle');
        $project->image_url = $request->get('image_url');
        $project->project_url = $request->get('project_url');
        $project->description = $request->get('description');
        $project->save();
        return redirect(route('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }
}
