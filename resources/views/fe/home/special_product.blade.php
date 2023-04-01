<div class="title1 section-my-space mt-0">
  <h4>special  products</h4>
</div>

<section class=" ratio_asos product section-pb-space ">
  <div class="custom-container ">
      <div class="row">
          <div class="col pr-0">
              <div class="product-slide-6  no-arrow">
                @foreach($prods as $item)
                <div>
                    <div class="product-box">
                        <div class="product-imgbox">
                            <div class="product-front">
                                <a href="{{ Route('product.details', $item->slug) }}">
                                    <img src="{{ asset('images/'. $item->image) }}" class="img-fluid" alt="product">
                                </a>
                            </div>
                            
                        </div>
                        <div class="product-detail detail-inline">
                            <div class="detail-title">
                                <div class="detail-left">
                                    <div class="rating-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{ Route('product.details', $item->slug) }}">
                                        <h6 class="price-title">
                                            {{ $item->name }}
                                        </h6>
                                    </a>
                                </div>
                                <div class="detail-right">
                                    <div class="check-price">
                                        $ {{ $item->price }}
                                    </div>
                                    <div class="price">
                                        <div class="price">
                                        $ {{ $item->price }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</section>