@extends('layouts.main')
@section('content')

    <main class="shop-page">
        <div class="container">
            <div class="page-header wow fadeInUp">
                <h2 class="page-title">Показано 12 результатов</h2>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 product-card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
