<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('books.create');
    }

    // Add the index method to display the list of books
    public function index()
    {
        // Retrieve all books from the database
        $books = Book::all();

        // Return a view with the books data
        return view('page.library', compact('books'));
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // Add the index method to display the list of books

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'bookImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'summary' => 'nullable|string',
            'bookPDF' => 'nullable|mimes:pdf', // max 10MB
        ]);

        // Handle the book image upload
        if ($request->hasFile('bookImage')) {
            $imagePath = $request->file('bookImage')->store('images', 'public');
        }

        // Handle the PDF upload
        if ($request->hasFile('bookPDF')) {
            $pdfPath = $request->file('bookPDF')->store('books', 'public');
        }
        $imagePath = Storage::disk('public')->put('images','imagePath');
        $pdfPath =  Storage::disk('public')->put('books','pdfPath');

        // Create a new book record
        Book::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'genre' => $validated['genre'],
            'published_year' => $validated['published_year'],
            'image_path' => $imagePath ,
            'summary' => $validated['summary'],
            'pdf_path' => $pdfPath,
        ]);

        // Redirect back with a success message
        return redirect()->route('page.library')->with('success', 'Book added successfully!');
    }

    // Show the form for editing an existing book
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('page.editlibrary', compact('book'));
    }

    // Update an existing book in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'published_year' => 'required|integer',
        ]);

        $books = Book::findOrFail($id);
        $books->update($request->all());
        return redirect()->route('library.index')->with('success', 'Book updated successfully.');
    }

    // Delete a book from the database
    public function destroy($id)
    {
        $books = Book::findOrFail($id);
        //$book_path=public_path('storage/'.$pdfPath);
        $books->delete();
        return redirect()->back();
    }
}
