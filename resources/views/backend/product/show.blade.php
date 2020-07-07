@extends('layouts.layouts')
@section('title', $product->first_name)
@section('content')
    <div class="card">
        <div class="col-sm-12">
            <h1 class="display-3">Show Item</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Description</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->product_description}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
