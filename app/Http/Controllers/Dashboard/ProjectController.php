<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\DataTables\ProjectDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProjectDataTable $dataTable)
    {
        return $dataTable->render('pages.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $input = $request->validated();

        $project = Project::create($input);

        return $this->successResponse(new ProjectResource($project), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $allimages = explode(',', $project->images);
        return view('pages.projects.edit', compact('project', 'allimages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $input = $request->validated();

        $project->update($input);

        return $this->successResponse(new ProjectResource($project), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function uploadfile(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
        $imagesOld = $project->images;

        //renaming files for projects only
        $filename = $project->name . '_' . Carbon::now()->format('Y-m-d_H-i-s') . '.' . $request->file('file')->getClientOriginalExtension();
        $filename = preg_replace('/[^A-Za-z0-9.]/', '',  $filename);
        $filename = str_replace(' ', '', $filename);
        $imagepath = $request->file('file')->storeAs('images/projects', $filename, 'public');

        //if old files are there then add the new one to the db

        if ($imagesOld) {
            $imagesNew = explode(',', $imagesOld);
            $imagesNew[count($imagesNew)] = $imagepath;
            $imagesOld = implode(',', $imagesNew);
        } else {
            $imagesOld = $imagepath;
        }

        //update the database
        $project->update(['images' => $imagesOld]);

        return $this->successMessageResponse('Image Uploaded Successful', 200);
    }

    public function deleteImage(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        $imagesOld = $project->images;
        $imagesNew = explode(',', $imagesOld);
        unset($imagesNew[$request->key]);
        $imagesNew = implode(',', $imagesNew);

        //update the database
        $project->update(['images' => $imagesNew]);

        return $this->successMessageResponse('Image Deleted Successful', 200);
    }
}
