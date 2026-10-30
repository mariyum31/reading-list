@extends('layouts.app')

@section('content')
<td><a href="{{ route('books.edit', $book) }}">Edit</a></td>
<p><a href="{{ route('books.create') }}" class="btn">Add book</a></p>
    @if ($books->isEmpty())
        <p>No books yet.</p>
    @else
        <table>
            <thead>
                <tr><th>Title</th><th>Author</th><th>Status</th></tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ \App\Models\Book::STATUSES[$book->status] ?? $book->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

<label for="title">Title</label>
<input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">

<label for="author">Author</label>
<input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">

<label for="status">Status</label>
<select id="status" name="status">
    @foreach (\App\Models\Book::STATUSES as $value => $label)
        <option value="{{ $value }}" @selected(old('status', $book->status ?? 'to-read') === $value)>
            {{ $label }}
        </option>
    @endforeach
</select>

<p>
    <button type="submit" class="btn">Save</button>
    <a href="{{ route('books.index') }}">Cancel</a>
</p>
@endsection