<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class VideoController extends Controller
{
    public function addVideo()
    {
        return view('teachers.add-video');
    }

    public function showTeacherVideos()
    {
        $videos = Video::all();
        return view('teachers.videos', compact('videos'));
    }

    public function showStudentVideos()
    {
        $videos = Video::all();
        return view('students.videos', compact('videos'));
    }

    public function searchTr(Request $request)
    {
        $keyword = $request->input('keyword');
        $videos = Video::where('title', 'like', "%$keyword%")->get();
        return view('teachers.videos', compact('videos'));
    }

    public function searchSt(Request $request)
    {
        $keyword = $request->input('keyword');
        $videos = Video::where('title', 'like', "%$keyword%")->get();
        return view('studentss.videos', compact('videos'));
    }

    public function store(Request $request)
    {
        //Log::info('Received request to store video.');
        //Log::info('Request data:', $request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,avi|max:102400', // Max file size: 100MB
        ]);
        //Log::info('Request Validated');

        // Store the video file
        $videoFile = $request->file('video');
        $videoFileName = time() . '_' . $videoFile->getClientOriginalName();
        $videoFilePath = $videoFile->storeAs('public/videos', $videoFileName);

        // Create a new Video model and save it to the database
        $video = new Video();
        $video->title = $request->title;
        $video->video_path = $videoFileName; // Store the video file path
        $video->save();

        return redirect()->back()->with('success', 'Video added successfully.');
    }

    public function destroy(Video $video)
    {
        // Delete the video file from storage
        Storage::delete('public/videos/' . $video->video_path);

        // Delete the video record from the database
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted successfully.');
    }
}
