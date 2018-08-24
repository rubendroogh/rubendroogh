<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function portfolio()
    {
    	return view('projects.portfolio');
    }

    public function getProject( $projectURL )
    {
    	$project = Project::where('url', $projectURL)->first();
    	$view = ( $project->genericPage ) ? 'generic' : $projectURL;

    	return view('projects.' . $view);
    }
}
