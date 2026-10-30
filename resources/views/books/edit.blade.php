@extends('layouts.app')

@section('content')
    <h2>Edit book</h2>
    <form method="POST" action="{{ route('books.update', $book) }}">
        @method('PUT')
        @include('books._form')
    </form>
@endsection