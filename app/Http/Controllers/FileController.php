<?php

namespace App\Http\Controllers;

use App\Models\FileData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response;

class FileController extends Controller
{
    public function viewForm()
    {
        return view('file.form');
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('file');
        $url = 'upload/' . $file->getClientOriginalName();
        $fileData = new FileData();
        $fileData->fileName = $file->getClientOriginalName();
        $fileData->fileUrl = $url;
        $fileData->save();
        $file->move('upload', $file->getClientOriginalName());
        return Redirect::route("file.get-all-file");
    }

    public function getAllFile()
    {
        $files = FileData::all();
        return view('file.list', [
            'files' => $files,
        ]);
    }

    public function downloadFile(Request $request)
    {
        $path = $request->get('file');
        $filepath = public_path($path);
        return Response::download($filepath);
    }
}
