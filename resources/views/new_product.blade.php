@extends('welcome')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-semibold px-6 text-red-500">Add New Product</h1>
        <div class="container bg-dark mt-5 p-4">
            <form action="{{ route('store.info') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-white">Product Name</label>
                    <input type="text" class="form-control w-50 rounded-pill" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-white">Product Description</label>
                    <textarea class="form-control w-75 h-75 rounded-pill" id="description" name="description" required></textarea>
                </div>
                <div class="d-flex flex-row"> 
                    <div class="d-flex flex-column flex-fill">
                    <div class="mb-3">
                        <label for="price" class="form-label text-white">Price</label>
                        <input type="number" class="form-control w-50  rounded-pill" id="price" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-white">Product Image URL</label>
                        <input type="text" class="form-control w-50 rounded-pill" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label text-white">Stock Quantity</label>
                        <input type="number" class="form-control w-50 rounded-pill" id="stock_quantity" name="stock_quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label text-white">Model</label>
                        <input type="text" class="form-control w-50 rounded-pill" id="model" name="model" required>
                    </div>
                </div>
                <div class="d-flex flex-column flex-fill"> 
                    <div class="mb-3">
                        <label for="brand" class="form-label text-white">Brand</label>
                        <input type="text" class="form-control w-50 rounded-pill" id="brand" name="brand" required>
                    </div>
                     <div class="mb-3">
                        <label for="rating" class="form-label text-white">Rating</label>
                        <input type="number" class="form-control w-50 rounded-pill" id="rating" name="rating" required>
                    </div>
                    <div class="mb-3">
                        <label for="reviews" class="form-label text-white">Reviews</label>
                        <input type="number" class="form-control w-50 rounded-pill" id="reviews" name="reviews" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary w-50">Add Product</button>
                    </div>
                </div>
            </div>
                <!-- Add more fields as needed -->
                
            </form>
        </div>
    </div>
@endsection