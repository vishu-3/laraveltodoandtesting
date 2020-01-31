<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm()
    {
    	return view('uploadfile');
    }
    public function storeFile(Request $request)
    {
    	// return $request->all();
    	if ($request->hasFile('file')) {
    		foreach ($request->file as $file) {
    			$filename = $file->getClientOriginalName();
    			$filesize = $file->getClientSize();
    			$file->storeAs('public/upload',$filename);
	    		$fileModel = new File;
	    		$fileModel->name = $filename;
	    		$fileModel->size = $filesize;
	    		$fileModel->save();
    		}
    		// return $request->file->storeAs('public/upload',$filename);
    		return 'All files are saved & info is stored in database';
    	} else {
    		return 'file is not saved';
    	}
    	
    }
}
