@extends('layouts.front')

@section('content')

<div class="product-slide-wrapper">
    <div class="product-slides owl-carousel">
        <div class="single-product-slide" style="background-image: url({{ asset($product->image) }})"></div>
    </div>
</div>
<div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
        <div class="container d-flex justify-content-between rtl-flex-d-row-r">
            <div class="p-title-price">
                <h5 class="mb-1">{{ $product->name }}</h5>
                <p class="sale-price mb-0 lh-1">{{ number_format($product->price) }}</p>
            </div>
            {{-- <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="fa-solid fa-heart"></i></a>
            </div> --}}
        </div>
    </div>
    @if ($product->category_id == 4)
    <div class="flash-sale-panel bg-white mb-3 py-3">
        <div class="container">
            <!-- Sales Offer Content-->
            <div class="sales-offer-content d-flex align-items-end justify-content-between">
                <!-- Sales End-->
                
                <div class="sales-end">
                    <p class="mb-1 font-weight-bold">
                        <i class="fa-solid fa-bolt-lightning lni-flashing-effect text-danger"></i> Promo berakhir pada
                    </p>
                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                    <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2023/01/31 00:00:00">
                        <li><span class="days">0</span>d</li>
                        <li><span class="hours">0</span>h</li>
                        <li><span class="minutes">0</span>m</li>
                        <li><span class="seconds">0</span>s</li>
                    </ul>
                </div>
                
                
            </div>
        </div>
    </div>
    @endif
    <!-- Selection Panel-->
    <div class="selection-panel bg-white mb-3 py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Choose Color-->
            <div class="choose-color-wrapper">
                <p class="mb-1 font-weight-bold">Color</p>
                <div class="choose-color-radio d-flex align-items-center">
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0">
                        <input class="form-check-input blue" id="colorRadio1" type="radio" name="colorRadio" checked>
                        <label class="form-check-label" for="colorRadio1"></label>
                    </div>
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0">
                        <input class="form-check-input yellow" id="colorRadio2" type="radio" name="colorRadio">
                        <label class="form-check-label" for="colorRadio2"></label>
                    </div>
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0">
                        <input class="form-check-input green" id="colorRadio3" type="radio" name="colorRadio">
                        <label class="form-check-label" for="colorRadio3"></label>
                    </div>
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0">
                        <input class="form-check-input purple" id="colorRadio4" type="radio" name="colorRadio">
                        <label class="form-check-label" for="colorRadio4"></label>
                    </div>
                </div>
            </div>
            <!-- Choose Size-->
            <div class="choose-size-wrapper text-end">
                <p class="mb-1 font-weight-bold">Size</p>
                <div class="choose-size-radio d-flex align-items-center">
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0 me-2">
                        <input class="form-check-input" id="sizeRadio1" type="radio" name="sizeRadio">
                        <label class="form-check-label" for="sizeRadio1">S</label>
                    </div>
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0 me-2">
                        <input class="form-check-input" id="sizeRadio2" type="radio" name="sizeRadio" checked>
                        <label class="form-check-label" for="sizeRadio2">M</label>
                    </div>
                    <!-- Single Radio Input-->
                    <div class="form-check mb-0 me-2">
                        <input class="form-check-input" id="sizeRadio3" type="radio" name="sizeRadio">
                        <label class="form-check-label" for="sizeRadio3">L</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add To Cart-->
    <div class="cart-form-wrapper bg-white mb-3 py-3">
        <div class="container">
            <form class="cart-form" action="#" method="">
                <div class="order-plus-minus d-flex align-items-center">
                    <div class="quantity-button-handler">-</div>
                    <input class="form-control cart-quantity-input" type="text" step="1" name="quantity" value="3">
                    <div class="quantity-button-handler">+</div>
                </div>
                <button class="btn btn-danger ms-3" type="submit">Add To Cart</button>
            </form>
        </div>
    </div>
    <!-- Product Specification-->
    <div class="p-specification bg-white mb-3 py-3">
        <div class="container">
            <h6>Specifications</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eum? Id, culpa? At officia
                quisquam laudantium nisi mollitia nesciunt, qui porro asperiores cum voluptates placeat
                similique recusandae in facere quos vitae?</p>
            <ul class="mb-3 ps-3">
                <li><i class="fa-solid fa-check me-1"></i> 100% Good Reviews</li>
                <li><i class="fa-solid fa-check me-1"></i> 7 Days Returns</li>
                <li> <i class="fa-solid fa-check me-1"></i> Warranty not Aplicable</li>
                <li> <i class="fa-solid fa-check me-1"></i> 100% Brand New Product</li>
            </ul>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eum? Id, culpa? At
                officia quisquam laudantium nisi mollitia nesciunt, qui porro asperiores cum voluptates placeat
                similique recusandae in facere quos vitae?</p>
        </div>
    </div>
    <!-- Product Video -->
    <div class="bg-img" style="background-image: url(img/product/18.jpg)">
        <div class="container">
            <div class="video-cta-content d-flex align-items-center justify-content-center">
                <div class="video-text text-center">
                    <h4 class="mb-4">Summer Clothing</h4><a class="btn btn-info rounded-circle" id="videoButton"
                        href="https://www.youtube.com/watch?v=lFGvqvPh5jI"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3"></div>
    <!-- Related Products Slides-->
    <div class="related-product-wrapper bg-white py-3 mb-3">
        <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
                <h6>Related Products</h6><a class="btn p-0" href="shop-grid.html">View All</a>
            </div>
            <div class="related-product-slide owl-carousel">
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-warning">Sale</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart">
                            </i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/11.png" alt="">
                            <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                            <ul class="offer-countdown-timer d-flex align-items-center shadow-sm"
                                data-countdown="2023/12/31 23:59:59">
                                <li><span class="days">0</span>d</li>
                                <li><span class="hours">0</span>h</li>
                                <li><span class="minutes">0</span>m</li>
                                <li><span class="seconds">0</span>s</li>
                            </ul>
                        </a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Beach Cap</a>
                        <!-- Product Price -->
                        <p class="sale-price">$13<span>$42</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-success">New</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart">
                            </i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/5.png" alt=""></a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Wooden
                            Sofa</a>
                        <!-- Product Price -->
                        <p class="sale-price">$74<span>$99</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-success">Sale</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart">
                            </i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/6.png" alt=""></a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Roof Lamp</a>
                        <!-- Product Price -->
                        <p class="sale-price">$99<span>$113</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-danger">-18%</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart">
                            </i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/9.png" alt="">
                            <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                            <ul class="offer-countdown-timer d-flex align-items-center shadow-sm"
                                data-countdown="2022/12/23 00:21:29">
                                <li><span class="days">0</span>d</li>
                                <li><span class="hours">0</span>h</li>
                                <li><span class="minutes">0</span>m</li>
                                <li><span class="seconds">0</span>s</li>
                            </ul>
                        </a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Sneaker
                            Shoes</a>
                        <!-- Product Price -->
                        <p class="sale-price">$87<span>$92</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-danger">-11%</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart"></i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/8.png" alt=""></a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Wooden
                            Chair</a>
                        <!-- Product Price -->
                        <p class="sale-price">$21<span>$25</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card product-card bg-gray shadow-none">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-warning">On Sale</span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="fa-solid fa-heart"></i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                class="mb-2" src="img/product/4.png" alt=""></a>
                        <!-- Product Title --><a class="product-title" href="single-product.html">Polo
                            Shirts</a>
                        <!-- Product Price -->
                        <p class="sale-price">$38<span>$41</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rating & Review Wrapper -->
    <div class="rating-and-review-wrapper bg-white py-3 mb-3 dir-rtl">
        <div class="container">
            <h6>Ratings &amp; Reviews</h6>
            <div class="rating-review-content">
                <ul class="ps-0">
                    <!-- Single User Review -->
                    <li class="single-user-review d-flex">
                        <div class="user-thumbnail"><img src="img/bg-img/7.jpg" alt=""></div>
                        <div class="rating-comment">
                            <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i></div>
                            <p class="comment mb-0">Very good product. It's just amazing!</p><span
                                class="name-date">Designing World 12 Dec 2022</span><a
                                class="review-image mt-2 border rounded" href="img/product/3.png"><img class="rounded-3"
                                    src="img/product/3.png" alt=""></a>
                        </div>
                    </li>
                    <!-- Single User Review -->
                    <li class="single-user-review d-flex">
                        <div class="user-thumbnail"><img src="img/bg-img/8.jpg" alt=""></div>
                        <div class="rating-comment">
                            <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i></div>
                            <p class="comment mb-0">Very excellent product. Love it.</p><span
                                class="name-date">Designing World 8 Dec 2022</span><a
                                class="review-image mt-2 border rounded" href="img/product/4.png"><img class="rounded-3"
                                    src="img/product/4.png" alt=""></a><a class="review-image mt-2 border rounded"
                                href="img/product/6.png"><img class="rounded-3" src="img/product/6.png" alt=""></a>
                        </div>
                    </li>
                    <!-- Single User Review -->
                    <li class="single-user-review d-flex">
                        <div class="user-thumbnail"><img src="img/bg-img/9.jpg" alt=""></div>
                        <div class="rating-comment">
                            <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i></div>
                            <p class="comment mb-0">What a nice product it is. I am looking it's.</p><span
                                class="name-date">Designing World 28 Nov 2022</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Ratings Submit Form-->
    <div class="ratings-submit-form bg-white py-3 dir-rtl">
        <div class="container">
            <h6>Submit A Review</h6>
            <form action="#" method="">
                <div class="stars mb-3">
                    <input class="star-1" type="radio" name="star" id="star1">
                    <label class="star-1" for="star1"></label>
                    <input class="star-2" type="radio" name="star" id="star2">
                    <label class="star-2" for="star2"></label>
                    <input class="star-3" type="radio" name="star" id="star3">
                    <label class="star-3" for="star3"></label>
                    <input class="star-4" type="radio" name="star" id="star4">
                    <label class="star-4" for="star4"></label>
                    <input class="star-5" type="radio" name="star" id="star5">
                    <label class="star-5" for="star5"></label><span></span>
                </div>
                <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10"
                    data-max-length="200" placeholder="Write your review..."></textarea>
                <button class="btn btn-primary" type="submit">Save Review</button>
            </form>
        </div>
    </div>
</div>

@endsection