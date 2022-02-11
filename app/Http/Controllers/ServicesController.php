<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Page;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function services()
  {
    $page = Page::where('route', 'services')->first();

    $page = Helper::connectPagesTexts($page);

    return view('pages.services', compact('page'));
  }

  public function adminServices()
  {
    $page = Page::where('route', 'services')->first();

    $page = Helper::connectPagesTexts($page);

    return view('admin.pages.services', compact('page'));
  }

  public function download()
  {
    $file = public_path('files/service.pdf');

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, 'service.pdf', $headers);
  }

  public function changeFile(Request $request)
  {
    $request->validate([
      'file' => 'mimes:pdf',
    ]);

    if (file_exists(public_path('files/service.pdf'))) {
      unlink(public_path('files/service.pdf'));
    }

    $file = $request->file('file');

    try {
      $file->move(public_path('files'), 'service.pdf');
      return back()->with('success', 'Файл успешно изменен!');
    } catch (\Throwable $th) {
      return $th;
    }
  }
}
