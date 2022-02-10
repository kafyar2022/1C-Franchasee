<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Company;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index()
  {
    $page = Page::where('route', 'projects')->first();
    $page = Helper::connectPagesTexts($page);
    $page['projects'] = Project::where('trashed', false)->latest()->get();

    $home = Helper::connectHomeTexts();
    $home['companies'] = Company::where('trashed', false)->get();

    return view('pages.projects', compact('page', 'home'));
  }

  public function indexAdmin()
  {
    $page = Page::where('route', 'projects')->first();
    $page = Helper::connectPagesTexts($page);
    $page['projects'] = Project::where('trashed', false)->latest()->get();

    $home = Helper::connectHomeTexts();
    $home['companies'] = Company::where('trashed', false)->get();

    return view('admin.pages.projects', compact('page', 'home'));
  }

  public function createProject(Request $request)
  {
    //
  }

  public function updateProject(Request $request)
  {
    //
  }

  public function deleteProject(Request $request)
  {
    $project = Project::find($request->id);
    $project->trashed = true;

    try {
      $project->save();
      return 'success';
    } catch (\Throwable $th) {
      return $th;
    }
  }
}
