@extends('admin.layout.layout')

@section('mycss')
<!-- Themify icon-->
<link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">

@endsection

@section('contents')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h5>Add Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                            <img src="{{ asset('/images/pro3/1.jpg') }}" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
                                        </div>
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <form action="{{ Route('admin.product.store') }}" method="POST" 
                                class="needs-validation add-product-form" novalidate="" 
                                enctype="multipart/form-data">
                                @csrf
                                    <div class="form">
                                    <div class="form-group row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="category" >Select Category :</label>    
                                            </div>
                                            <div class="col-xl-8 col-sm-7">
                                                <select class="form-control digits" name="category_id" id="category">
                                                    @foreach($cates as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3  row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="validationCustom01" >Name :</label>    
                                            </div>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control " id="validationCustom01" type="text" name="name" required="">
                                                <div class="valid-feedback">Looks good!</div>    
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="validationCustom02" >Price :</label>    
                                            </div>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control " id="validationCustom02" type="text" name="price" required="">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="validationCustomUsername" >Product Code :</label>    
                                            </div>
                                            
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control " id="validationCustomUsername" type="text" name="sku" required="">
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="exampleFormControlSelect1" >Select Size :</label>    
                                            </div>
                                            <div class="col-xl-8 col-sm-7">
                                                <select class="form-control digits" name="size" id="exampleFormControlSelect1">
                                                    <option value="1">Small</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Large</option>
                                                    <option value="4">Extra Large</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label>Quantity :</label>    
                                            </div>
                                            <div class="col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                <fieldset class="qty-box ">
                                                    <div class="input-group">
                                                        <input class="touchspin" type="text" name="quantity" value="1">
                                                    </div>
                                                </fieldset>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Add Description :</label>
                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <textarea id="editor1" name="description" cols="10" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                            <div class="col-xl-3 col-sm-4 mb-0">
                                                <label for="image">Image :</label>    
                                            </div>
                                            
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="image" type="file" name="photo" required="">
                                            </div>
                                        </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection

@section('myjs')
<!-- touchspin js-->
<script src="{{ asset('/js/touchspin/vendors.min.js') }}"></script>
<script src="{{ asset('/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('/js/touchspin/input-groups.min.js') }}"></script>

<!-- form validation js-->
<script src="{{ asset('/js/dashboard/form-validation-custom.js') }}"></script>

<!-- ckeditor js-->
<script src="{{ asset('/js/editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/editor/ckeditor/styles.js') }}"></script>
<script src="{{ asset('/js/editor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

<!-- Zoom js-->
<script src="{{ asset('/js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('/js/zoom-scripts.js') }}"></script>
@endsection