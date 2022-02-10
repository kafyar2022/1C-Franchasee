<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function services()
  {
    $page = Page::where('route', 'services')->first();
    
    return view('pages.services', compact('page'));
  }

  public function adminServices()
  {
    $page = Page::where('route', 'services')->first();

    return view('admin.pages.services', compact('page'));
  }
}
