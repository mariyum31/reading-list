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