<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Illuminate\Support\Facades\Log;

class LibraryController extends Controller
{
    public function showTeachersLibrarySection()
    {
        // Fetch all books from the database
        $books = Book::all();
        
        // Pass the books data to the view and render library.blade.php
        return view('teachers.library', ['books' => $books]);
    }

    public function showStudentsLibrarySection()
    {
        return view('students.library');
    }

    public function showBookSection()
    {
        // Fetch all books from the database
        $books = Book::all();
        
        // Pass the books data to the view and render library.blade.php
        return view('students.books', ['books' => $books]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|max:255',
        ]);

        $keyword = $request->input('keyword');

        $books = Book::where('title', 'like', "%$keyword%")->get();

        return view('teachers.library', compact('books'));
    }

    public function viewPdf($filename)
{
    $pdfPath = Book::where('title', $filename)->value('pdf');
    // Log::info('path: '.$pdfPath);

    // $filePath = 'http://localhost/unified/storage/app/public'.$pdfPath;

    $filePath = storage_path('app/public/' . $pdfPath);
    Log::info('filepath: '.$filePath);

    // Check if the file exists
    if (!Storage::exists($filePath)) {
        abort(404);
    }

    // Return the PDF file as a response
    $headers = [
        'Content-Type' => 'application/pdf',
    ];

   // return response()->file($filePath);
   return Response::make(file_get_contents($filePath), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"'
]);
}

}
