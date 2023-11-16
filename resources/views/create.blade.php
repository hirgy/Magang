<!-- resources/views/crud/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Product</title>
</head>
<body>
    <h1>Create a New Product</h1>
    
    @if(session('success-create'))
        <p style="color: green;">{{ session('success-create') }}</p>
    @endif

    <form action="/crud" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="price">Price:</label>
