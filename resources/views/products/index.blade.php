@extends('layout')

@section('title', 'List Product')

@section('content')

<div class="container">
    <h1 class="text-center mt-5 mb-3">List Product</h1>
    <div class="row isotope-grid">
        @foreach ($productList as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img class="card-img-top" src="{{' https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80 '}}" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Mã sản phẩm:</strong> {{ $product->id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Giá bán:</strong> {{ $product->price }} đ
                        </li>
                        <li class="list-group-item">
                            <strong>Đơn vị:</strong> {{ $product->unit   }}
                        </li>
                        <li class="list-group-item">
                            <strong>Giá nhập:</strong> {{ $product->import_price }} đ
                        </li>
                        <li class="list-group-item">
                            <strong>Số lượng:</strong> {{ $product->quantity }}
                        </li>
                        <li class="list-group-item">
                            <strong>Mã danh mục:</strong> {{ $product->category_id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Status:</strong> {{ $product->desc }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>