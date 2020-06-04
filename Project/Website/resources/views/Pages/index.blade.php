@extends('layouts.Index')

@section('title')
Home
@endsection


@section('New_Product')
{{-- {{ $ProductValues = ProductController::SelectForIndex()}} --}}
@foreach ($Values as $Value)
<!-- product -->
<div class="product">
    <div class="product-img">
        <img src="{{asset('../img/'.$Value->Photo.".jpg")}} " alt="">
        <div class="product-label">
            <span class="sale">-30%</span>
            <span class="new">NEW</span>
        </div>
    </div>
    <div class="product-body">
        <p class="product-category">Category</p>
        <h3 class="product-name"><a href="#">{{ $Value->ProductName }}</a></h3>
        <h4 class="product-price">₾{{ $Value->Price* $Value->Discount }}<del class="product-old-price">₾{{ $Value->Price  }}</del></h4>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product-btns">
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
    </div>
</div>
<!-- /product -->
@endforeach
@endsection


@section('hot-deal-countdown')
<li>
    <div>
        <h3>02</h3>
        <span>Days</span>
    </div>
</li>
<li>
    <div>
        <h3>10</h3>
        <span>Hours</span>
    </div>
</li>
<li>
    <div>
        <h3>34</h3>
        <span>Mins</span>
    </div>
</li>
@endsection

@section('Top_selling')
@foreach ($Values as $Value)
<!-- product -->
<div class="product">
    <div class="product-img">
        <img src="{{asset('../img/'.$Value->Photo.".jpg")}} " alt="">
        <div class="product-label">
            <span class="sale">-30%</span>
            <span class="new">NEW</span>
        </div>
    </div>
    <div class="product-body">
        <p class="product-category">Category</p>
        <h3 class="product-name"><a href="#">{{ $Value->ProductName }}</a></h3>
        <h4 class="product-price">₾{{ $Value->Price * $Value->Discount }}<del class="product-old-price">₾{{ $Value->Price  }}</del></h4>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product-btns">
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
    </div>
</div>
<!-- /product -->
@endforeach
@endsection
