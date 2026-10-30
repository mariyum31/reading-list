<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

public function index(Request $request)
{
    $status = $request->query('status');

    $books = Book::query()
        ->when(array_key_exists($status, Book::STATUSES), fn ($q) => $q->where('status', $status))
        ->orderBy('title')
        ->get();

    return view('books.index', compact('books', 'status'));
}
