<!-- resources/views/admin/dashboard.blade.php -->
@extends('welcome')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="fs-2 fw-bolder">Admin Dashboard</h1>
        <div class="container bg-dark mt-5">
            <div class="row bg-primary">
                <a class="btn btn-danger fs-4 fw-bold border" style="width: 10em "href="/admin/AddNewProduct">New Product</a>
            </div> 
            <div class="row">
                <ul class="list-group list-group-flush">
                    @foreach($products_list as $product)
                    <li class="list-group-item d-flex justify-content-between">{{$product->name}}
                        <div>
                        <a href="#" class="btn btn-primary mx-2 ">Detail</a>
                        <a href={{route('edit_product.info', $product->id)}} class="btn btn-primary mx-2 "> Edit</a>
                        <form action={{route('delete.info')}} method="POST" class="d-inline">
                             @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="submit" value="Delete" class="btn btn-primary mx-2" style="background-color:#0d6efd ">
                        </form>
                        </div>
                    </li>
                     @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection