<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function create()
    {
        return view('teachers.add-book');
    }

    public function storeBook(Request $request): RedirectResponse
{
    $request->validate([
        'title' => 'required|string|max:255',
        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'pdf_file' => 'required|mimes:pdf|max:10240', // Max file size: 10MB
    ]);

    $imageName = time().'.'.$request->cover_image->extension();  

    // Store the cover image using storeAs() with the specified directory and filename
    $coverImagePath = $request->cover_image->storeAs('public/book-cover', $imageName);
    // Log::info('Book url: '.$coverImagePath);

    $pdfFile = $request->file('pdf_file');
    $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();

    // Store the PDF file using storeAs() with the specified directory and filename
    $pdfFilePath = $pdfFile->storeAs('public/books', $pdfFileName);

    $book = new Book();
    $book->title = $request->title;

    // Adjust the cover image file path to use the correct URL
    $book->cover_image = $imageName; //asset('storage/book-cover/' . $imageName); 

    // Store the PDF file path without 'storage/app/' prefix
    $book->pdf = 'books/' . $pdfFileName; 

    $book->save();

    return redirect()->back()->with('success', 'Book added successfully.');
}


    public function destroy($id)
    {
        // Find the book by its ID
        $book = Book::findOrFail($id);

        // Delete the book
        $book->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Book deleted successfully.');
    }
}
