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
                        <table class="jsgrid-table">
                            <thead>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 30px;">Id</th>
                                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable jsgrid-header-sort jsgrid-header-sort-asc" style="width: 50px;">Product</th>
                                    <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Product Name</th>
                                    <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Price</th>
                                    <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Quantity</th>
                                    <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Category</th>
                                    <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prods as $item)
                                <tr class="jsgrid-row jsgrid-selected-row">
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;">{{ $item->id }}</td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                        @if ($item->image != null)
                                        <img src="{{ asset('images/' . $item->image) }}" style="height: auto; width: 100px;">
                                        @endif
                                    </td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $item->name }}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $item->price }}</td>
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{ $item->quantity }}</td>
                                    <td class="jsgrid-cell" style="width: 50px;">{{ $item->category->name }}</td>
                                    <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                        <input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit">
                                        <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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