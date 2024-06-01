@extends('layout.master')

@section('Content')

@if(session('Note'))
<div class="alert alert-success">
    {{ session('Note') }}
</div>
@endif

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->
<!-- Page Content -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All Products</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-4 all des">
                            <div class="product-item">
                                <a href="#"><img src="{{ $product->thumbnail }}" alt="{{ $product->tittle }}"></a>
                                <div class="down-content">
                                    <a href="#"><h4>{{ $product->tittle }}</h4></a>
                                    <h6>${{ $product->price }}</h6>
                                    <p>{{ $product->description }}</p>
                                    <span>Reviews ({{ rand(10, 100) }})</span> <!-- Random reviews count for demo -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="pages">
                    {{ $products->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
