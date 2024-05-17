<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function showStudentGallery() {
        return view("students.gallery");
    }

    public function showTeacherGallery() {
        return view("teachers.gallery");
    }

    public function showUploadForm()
{
    return view('teachers.photoUpload');
}

    public function store(Request $request)
{\
    Log::info('Received request to store photo.');
    Log::info('Request data:', $request->all());

    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
        'caption' => 'nullable|string|max:255',
    ]);
    Log::info('Request validated.');

    // Store the photo file
    $photoFile = $request->file('photo');
    Log::info('Photo file received:', ['name' => $photoFile->getClientOriginalName()]);
    
    $photoFileName = time() . '_' . $photoFile->getClientOriginalName();
    $photoFilePath = $photoFile->storeAs('public/gallery', $photoFileName);
    Log::info('Photo stored successfully:', ['path' => $photoFilePath]);

    // Create a new Photo model and save it to the database
    $photo = new Photo();
    $photo->image_path = $photoFileName; // Store the photo file path
    $photo->caption = $request->caption;
    $photo->save();
    Log::info('Photo saved to database:', ['id' => $photo->id]);

    return redirect()->back()->with('success', 'Photo added successfully.');
}

}
