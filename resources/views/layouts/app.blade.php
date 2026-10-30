<!-- <!DOCTYPE html>
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
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reading List</title>
    <style>
        :root {
            --bg: #f4f1ec;
            --card: #ffffff;
            --text: #2b2b2b;
            --muted: #6b6b6b;
            --line: #ece7df;
            --accent: #4f46e5;
            --accent-dark: #4338ca;
            --danger: #dc2626;
        }
        * { box-sizing: border-box; }
        body {
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 2rem 1rem;
            line-height: 1.5;
        }
        .container { max-width: 760px; margin: 0 auto; }
        h1 { font-size: 1.8rem; margin: 0 0 1.25rem; }
        h2 { margin-top: 0; }
        a { color: var(--accent); }
        .card {
            background: var(--card);
            border-radius: 14px;
            padding: 1.5rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .07);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: .55rem 1rem;
            border: none;
            border-radius: 8px;
            background: var(--accent);
            color: #fff;
            font-size: .95rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover { background: var(--accent-dark); }
        .btn-sm { padding: .3rem .7rem; font-size: .85rem; }
        .btn-light { background: #eef0ff; color: var(--accent-dark); }
        .btn-light:hover { background: #dfe3ff; }
        .btn-danger { background: #fee2e2; color: var(--danger); }
        .btn-danger:hover { background: #fecaca; }

        /* Toolbar and filters */
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: .75rem;
            margin-bottom: 1.25rem;
        }
        .filters { display: flex; gap: .4rem; flex-wrap: wrap; }
        .filters a {
            padding: .3rem .85rem;
            border-radius: 999px;
            background: #f1f1f1;
            color: var(--muted);
            text-decoration: none;
            font-size: .9rem;
        }
        .filters a:hover { background: #e5e5e5; }
        .filters a.active { background: var(--accent); color: #fff; font-weight: 600; }

        /* Table */
        table { width: 100%; border-collapse: collapse; }
        th {
            text-align: left;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: var(--muted);
            padding: .5rem .5rem;
            border-bottom: 2px solid var(--line);
        }
        td { padding: .85rem .5rem; border-bottom: 1px solid var(--line); vertical-align: middle; }
        tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #faf8f5; }
        .book-title { font-weight: 600; }
        .actions { display: flex; gap: .4rem; justify-content: flex-end; }
        form.inline { display: inline; margin: 0; }

        /* Status badges */
        .badge {
            display: inline-block;
            padding: .15rem .65rem;
            border-radius: 999px;
            font-size: .8rem;
            font-weight: 600;
        }
        .badge-to-read  { background: #fef3c7; color: #92400e; }
        .badge-reading  { background: #dbeafe; color: #1e40af; }
        .badge-finished { background: #dcfce7; color: #166534; }

        .empty { text-align: center; color: var(--muted); padding: 2rem 0; }

        /* Forms */
        label { display: block; margin-top: 1rem; font-weight: 600; font-size: .9rem; }
        input, select {
            width: 100%;
            padding: .6rem .7rem;
            margin-top: .3rem;
            border: 1px solid #d4d4d8;
            border-radius: 8px;
            font-size: 1rem;
            background: #fff;
        }
        input:focus, select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, .15);
        }
        .errors {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            border-radius: 8px;
            padding: .6rem 1rem;
            margin-bottom: 1rem;
        }
        .errors ul { margin: 0; padding-left: 1.2rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 My Reading List</h1>
        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</html>