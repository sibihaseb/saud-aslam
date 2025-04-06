<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\TemporaryAppCode;
use App\Http\Controllers\Controller;
use App\Models\Project;

class IndexController extends Controller
{
    public function index()
    {
        if (!auth()->user()) {
            return view('pages.auth.signin-cover');
        } else {
            return redirect('/admin/home');
        }
    }

    public function landing()
    {
        $projects = Project::get();
        $projects = $projects->map(function ($project) {
            $images = explode(',', $project->images);
            $project->images = $images[0];
            return $project;
        });
        return view('welcome', compact('projects'));
    }

    public function project($id)
    {
        $project = Project::findOrfail($id);
        $allimages = explode(',', $project->images);

        return view('project', compact('allimages', 'project'));
    }
}
