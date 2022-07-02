@extends('home.home-page')
@section('title', 'Home Page')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                {{ $product->product_name }}
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('image/products/' . $product->image) }}"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> {{ $product->product_name }}</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    Rp. {{ number_format($product->price) }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    {{-- <a href="{{ route('post.edit', $post->id) }}" --}}
                                    <a class="btn btn-outline-dark mt-auto" {{-- home-page/{id}/detail" --}}
                                        href="{{ route('product-detail', $product->id) }}">
                                        Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $products->links() }}
        </div>
    </section>
@endsection
