@extends('layouts.layouts')
@section('title','product')
@section('content')
    <div class="row">
        <div>
            <a style="margin: 19px;" href="{{ route('products.create')}}" class="btn btn-primary">New Product</a>
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Product</h1>
            <div class="col-sm-12">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td colspan = 3>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->product_id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_description}}</td>
                        <td>{{$product->price}} VNĐ</td>
                        <td>
                            <a href="{{ route('products.show',$product->product_id)}}" class="btn btn-primary" title="Show"><i class="fas fa-eye"></i></a>
                        </td>
                        <td>
                            <a href="{{route('products.edit', $product->product_id)}}" class="btn btn-success" title="Edit"><i class="fas fa-edit"></i> </a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->product_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$products->links()}}
@endsection
