<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BookController extends Controller
{

    public function index():View
    {

        $books = Book::latest()->paginate(5);

        return view('books.index', compact('books'));
    }

    public function create(Book $book):View
    {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        $pdf = $request->file('content');
        $pdf->storeAs('public/pdfs', $pdf->hashName());

        //create post
        Book::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $pdf->hashName()
        ]);

        //redirect to index
        return redirect()->route('books.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function test(Book $book):View
    {
        $books = Book::all();

        return view('news', compact('books'));
    }

}
