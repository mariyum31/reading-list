{{-- @extends('layouts.app')

@section('content')
<td><a href="{{ route('books.edit', $book) }}">Edit</a><form method="POST" action="{{ route('books.destroy', $book) }}" class="inline"
      onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">Delete</button>
</form></td>
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

    <p class="filters">
    <a href="{{ route('books.index') }}" class="{{ !$status ? 'active' : '' }}">All</a>
    @foreach (\App\Models\Book::STATUSES as $value => $label)
        <a href="{{ route('books.index', ['status' => $value]) }}"
           class="{{ $status === $value ? 'active' : '' }}">{{ $label }}</a>
    @endforeach
</p>


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

yooo




@extends('layouts.app')

@section('content')

<h1>My Reading List</h1>

<a href="{{ route('books.create') }}">Add Book</a>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->status }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}">Edit</a>

                    <form method="POST"
                          action="{{ route('books.destroy', $book) }}"
                          onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection  --}}

@extends('layouts.app')

@section('content')
    <p><a href="{{ route('books.create') }}" class="btn">Add book</a></p>

    <p class="filters">
        <a href="{{ route('books.index') }}" class="{{ !$status ? 'active' : '' }}">All</a>
        @foreach (\App\Models\Book::STATUSES as $value => $label)
            <a href="{{ route('books.index', ['status' => $value]) }}"
               class="{{ $status === $value ? 'active' : '' }}">{{ $label }}</a>
        @endforeach
    </p>

    @if ($books->isEmpty())
        <p>No books yet.</p>
    @else
        <table>
            <thead>
                <tr><th>Title</th><th>Author</th><th>Status</th><th></th></tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ \App\Models\Book::STATUSES[$book->status] ?? $book->status }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book) }}">Edit</a>
                            <form method="POST" action="{{ route('books.destroy', $book) }}" class="inline"
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
