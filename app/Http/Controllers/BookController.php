<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');

        $books = Book::query()
            ->when(in_array($status, array_keys(Book::STATUSES), true), fn ($q) => $q->where('status', $status))
            ->orderBy('title')
            ->get();

        return view('books.index', compact('books', 'status'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($this->validated($request));

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($this->validated($request));

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

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
}