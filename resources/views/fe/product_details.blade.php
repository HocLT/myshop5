@extends('fe.layout.layout')
@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>product</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
@include('fe.product_details.section_product')
<!-- Section ends -->

<!-- product-tab starts -->
@include('fe.product_details.section_description')
<!-- product-tab ends -->

<!-- related products -->
@include('fe.product_details.section_related')
<!-- related products -->

@endsection