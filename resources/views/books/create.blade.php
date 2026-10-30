@extends('layouts.app')

@section('content')
    <h2>Add book</h2>
    <form method="POST" action="{{ route('books.store') }}">
        @include('books._form', ['book' => new \App\Models\Book])
    </form>
@endsection