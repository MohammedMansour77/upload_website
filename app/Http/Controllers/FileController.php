<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,docx,png,jpeg|max:2048',
        ]);

        if ($request->file('file')->isValid()) {
            $file = $request->file('file');
            $filePath = $file->store('uploads');
            // Save file details to the database
            File::create([
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getClientOriginalExtension(),
                'file_size' => $file->getSize(),

            ]);

            // return redirect()->back()->with('success', 'File uploaded successfully.');
            // return redirect()->route('file.list')->with('success', 'File uploaded successfully.');
            $fileId = File::latest('id')->first()->id;
            return redirect()->route('file.list', ['id' => $fileId])->with('success', 'File uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Error uploading file.');
    }

    public function downloadFile($id)
    {
        $file = File::find($id);

        if (!$file) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return response()->download(storage_path('app/' . $file->file_path));
    }
    public function showUploadedFiles($id)
    {

        $files = File::find($id);

        if (!$files) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return view('list', compact('files'));
    }
}
