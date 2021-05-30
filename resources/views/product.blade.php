@extends('product-layout')

@section('menu')
    @include('includes/menu')
    
@endsection

@section('content')
<section class="hero-slider">
    <div class="container-fluid">
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <h2> {{$product->product_name }}</h2>
            <p> {!!$product->product_desc !!}</p>
                </div>
            </div>
        
        </div>
        <!--/ End Single Slider -->
    </div>
</section>

    <a href="/">back to home</a>
@endsection

