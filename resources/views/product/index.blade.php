@extends('layouts.main')
@section('content')

    <main class="shop-page">
        <div class="container">
            <form action="{{ route('product.index') }}" method="get">
                <div class="mb-3">
                    <h4>Выберите категорию</h4>
                    <select name="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Применить</button>
                <a href="{{ route('product.index') }}" class="btn btn-danger">Сброс</a>
            </form>
            <div class="page-header wow fadeInUp">
                <h2 class="page-title">Показано {{ $products->count() }} результатов</h2>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 product-card wow fadeInUp"
                         style="visibility: visible; animation-name: fadeInUp;">
                        <a class="text-decoration-none text-dark" href="{{ route('product.show', $product->id) }}">
                            <div class="product-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="product"
                                     class="product-thumbnail">
                            </div>
                            <h5 class="product-title">{{ $product->title }}</h5>
                            <p class="product-price">{{ $product->price . ' $' }}</p>
                            <div class="btn-wrapper">
                                <button class="btn btn-add-to-cart">Добавить в корзину</button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="m-auto">
                    {{ $products->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
