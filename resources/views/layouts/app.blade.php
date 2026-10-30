<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reading List</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 2rem auto; padding: 0 1rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: .5rem; border-bottom: 1px solid #ddd; }
        .btn { padding: .4rem .8rem; border: 1px solid #333; background: #fff; cursor: pointer; text-decoration: none; color: #000; font-size: 1rem; }
        .errors { background: #fdd; padding: .5rem 1rem; margin-bottom: 1rem; }
        .filters a { margin-right: .75rem; }
        .filters a.active { font-weight: bold; }
        form.inline { display: inline; }
        label { display: block; margin-top: 1rem; }
        input, select { width: 100%; padding: .4rem; box-sizing: border-box; }
    </style>
</head>
<body>
    <h1>📚 My Reading List</h1>
    @yield('content')
</body>
</html>