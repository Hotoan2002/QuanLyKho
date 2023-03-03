@extends('layout')

@section('title', 'List Category')

@section('content')

<div class="row isotope-grid">
    @foreach ($categoryList as $category)
        <div class="category">
            <h2 class="category-title">{{ $category->name }}</h2>
            <p class="category-id">Mã Danh Mục: {{ $category->id }}</p>
            <p class="category-desc">Mô Tả: {{ $category->desc }}</p>
        </div>
    @endforeach
</div>
<style>
    .isotope-grid {
        display: flex;
        flex-wrap: wrap;
    }

    .category {
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        width: calc(33.33% - 20px);
    }

    .category-title {
        margin-top: 0;
    }

    .category-id,
    .category-desc {
        margin: 0;
    }
</style>
@endsection