<div class="col-4">
    <div class="card featured-product-card">
        <div class="card-body p-0">
            <div class="product-thumbnail-side m-0">
                <a class="product-thumbnail d-block" href="single-product.html">
                    <img class="rounded" src="{{ asset($product->image) }}" alt="">
                </a>
            </div>
            <div class="product-description p-2">
                <a class="product-title d-block" href="single-product.html" style="font-size: 12px !important;">{{ $product->name }}</a>
                <p class="sale-price" style="font-size: 14px !important;">{{ number_format($product->price) }}</p>
            </div>
        </div>
    </div>
</div>