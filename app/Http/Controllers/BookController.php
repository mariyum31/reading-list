<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title')->get();

        return view('books.index', compact('books'));
    }
}

use Illuminate\Validation\Rule;

public function create()
{
    return view('books.create');
}

public function store(Request $request)
{
    Book::create($this->validated($request));

    return redirect()->route('books.index');
}

private function validated(Request $request): array
{
    return $request->validate([
        'title'  => ['required', 'max:255'],
        'author' => ['required', 'max:255'],
        'status' => ['required', Rule::in(array_keys(Book::STATUSES))],
    ]);
}   