@extends('layouts.layouts')
@section('title',$product->first_name)
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Product</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('products.update', $product->product_id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group"><label for="name"> Name:</label>
                    <input type="text" class="form-control" name="product_name" value={{ $product->product_name }} />
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price" value={{ $product->price }} />
                </div>
                <div class="form-group">
                    <label for="description"></label>
                    <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
