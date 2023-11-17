<!-- resources/views/crud.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Operations</title>
</head>
<body>
    <!-- Display the list of products -->
    <h1>List of Products</h1>
    @if(isset($products))
        @foreach($products as $product)
            {{ $product->name }} - ${{ $product->price }}
            <a href="/crud/{{ $product->id }}">View</a>
            <a href="/crud/{{ $product->id }}/edit">Edit</a>
            <form action="/crud/{{ $product->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    @endif

    <!-- Link to create a new product -->
    <a href="/crud/create">Create New Data</a>

    <!-- Form to create a new product -->
    <h2>Create a New Data</h2>
    @if(session('success-create'))
        <p style="color: green;">{{ session('success-create') }}</p>
    @endif
    <form action="/crud" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="price">Price:</label>
        <input type="number" name="price" required>
        <button type="submit">Create Product</button>
    </form>

    <!-- Display details of a single product -->
    <h2>Product Details</h2>
    @if(isset($product))
        <p>Name: {{ $product->name }}</p>
        <p>Price: ${{ $product->price }}</p>
    @endif

    <!-- Form to edit an existing product -->
    <h2>Edit Product</h2>
    @if(isset($product))
        @if(session('success-update'))
            <p style="color: green;">{{ session('success-update') }}</p>
        @endif
        <form action="/crud/{{ $product->id }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}" required>
            <button type="submit">Update Product</button>
        </form>
    @endif
</body>
</html>
