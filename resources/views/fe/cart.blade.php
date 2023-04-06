@extends('fe.layout.layout')
@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space b-g-light">
    <div class="custom-container">
      <form action="{{ Route('updateCart') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
              @php
              $total = 0;
              @endphp
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($cart as $item)
                      <tr>
                          <td>
                              <a href="javascript:void(0)"><img src="{{ asset('/images/' . $item->product->image) }}" alt="cart"  class=" "></a>
                          </td>
                          <td><a href="javascript:void(0)">{{ $item->product->name }}</a>
                              <div class="mobile-cart-content">
                                  <div class="col-xs-3">
                                      <div class="qty-box">
                                          <div class="input-group">
                                              <input type="text" name="quantity" class="form-control input-number" value="{{ $item->quantity }}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xs-3">
                                      <h2 class="td-color">$ {{ $item->product->price }}</h2></div>
                                  <div class="col-xs-3">
                                      <h2 class="td-color"><a href="javascript:void(0)" class="icon"><i class="ti-close"></i></a></h2></div>
                              </div>
                          </td>
                          <td>
                              <h2>$ {{ $item->product->price }}</h2></td>
                          <td>
                              <input type="hidden" name="id" value="{{ $item->product->id }}" />
                              <div class="qty-box">
                                  <div class="input-group">
                                      <input type="number" name="quantity" data-pid="{{ $item->product->id }}" class="form-control input-number" value="{{ $item->quantity }}">
                                  </div>
                              </div>
                          </td>
                          <td><a href="javascript:void(0)" class="icon"><i class="ti-close"></i></a></td>
                          <td>
                            <h2 class="td-color">$ {{ $item->product->price * $item->quantity }}</h2>
                          </td>
                          @php
                          $total += $item->product->price * $item->quantity;
                          @endphp
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                          <h2>$ {{ $total }}</h2>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12">
              <input type="submit" class="btn btn-normal btn-update-cart" value="Update Cart"/> 
              <a href="javascript:void(0)" class="btn btn-normal ms-3">continue shopping</a> 
              <a href="javascript:void(0)" class="btn btn-normal ms-3">check out</a>
          </div>
        </div>
      </form>
    </div>
</section>
<!--section end-->
@endsection
@section('myjs')
<script>
  // $('.btn-update-cart').click(function(e) {
  //   e.preventDefault();

  //   let inputQuantity = $('input[name="quantity"]');
  //   alert(inputQuantity.val());
  //   let pid = inputQuantity.data('pid');
  //   alert(pid);
  // });
</script>
@endsection