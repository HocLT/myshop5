@extends('admin.layout.layout')

@section('mycss')
<!-- Flag icon-->
<link rel="stylesheet" href="{{ asset('/css/flag-icon.css') }}">
@endsection

@section('contents')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Digital</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Lists</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection

@section('myjs')
<!-- Jsgrid js-->
<script src="{{ asset('/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('/js/jsgrid/griddata-productlist-digital.js') }}"></script>
<script src="{{ asset('/js/jsgrid/jsgrid-list.js') }}"></script>

@endsection