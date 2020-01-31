<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
    	return view('upload.upload');
    }
    public function store(Request $request)
    {
    	// if ($request->hasFile('image')) {
    	// 	return Storage::putFile('public',$request->file('image'));
    	// 	 // $request->file('image');
    	// 	 // return $request->image->store('public');
    	// 	 // return $request->image->path();
    	// 	 // return $request->image->extension();
    	// }else{
    	// 	return 'No file is selected';
    	// }

    	if ($request->hasFile('image')) {
    		$request->file('image');
    		return $request->image->storeAs('public','rohingyamigration.jpg');
    	} else {
    		return 'No file is selected';
    	}

    }
    public function show()
    {
    	// return Storage::files('public');

    	// if (Storage::makeDirectory('public/make')) {
    	// 	return 'Directory is created';
    	// } else {
    	// 	return 'Directory is not created';
    	// }

    	// if (Storage::deleteDirectory('public/make')) {
    	// 	return 'Directory deleted';
    	// } else {
    	// 	# cod
    	// 	return 'Directory  not deleted';
    	// }
    	
    	// return Storage::url('rohingya migration.jpg');
    	// $url = Storage::url('rohingyamigration.jpg');
    	// return "<img src='".$url."'/>";
    	
    	// return $size = Storage::size('public/rohingyamigration.jpg');
    	
    	// return $lastmodifiedinfo = date("Y-m-d",Storage::lastModified('public/rohingyamigration.jpg'));

    	// if (Storage::copy('public/rohingyamigration.jpg','rohingya.jpg')) {
    	// 	return 'File is copyied';
    	// } else {
    	// 	return 'File is not copyied';
    	// }
    	
    	// if (Storage::move('rohingya.jpg','public/rohingyamigration.jpg')) {
    	// 	return 'File is moved';
    	// } else {
    	// 	return 'File is not moved';
    	// }

    	// return Storage::get('public/rohingyamigration.jpg');

    	 // $rawContent = Storage::get('public/rohingyamigration.jpg');
    	 // if (Storage::put('newImage.jpg',$rawContent)) {
    	 // 	return "File is created";
    	 // } else {
    	 // 	return "File is not created";
    	 // }
    	
		// if (Storage::delete('public/rohingyamigration.jpg')) {
		// 	return 'File is deleted';
		// } else {
		// 	# code...
		// 	return 'File is not deleted';
		// }
		
		    	 

    }
}
