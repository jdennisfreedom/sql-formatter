<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Formatter</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>Enter SQL Query</h1>
<form method="POST" action="/format">
    @csrf
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <textarea name="sql" rows="20" cols="140">{{ old('sql', $originalSQL ?? '') }}</textarea>
    <br>
    <button type="submit">Format SQL</button>
</form>

@isset($formattedSQL)
    <h2>Formatted SQL</h2>
    <pre>{!! $formattedSQL !!}</pre>
@endisset
</body>
</html>
