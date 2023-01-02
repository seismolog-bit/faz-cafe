<div class="col-4">
    <a class="card blog-card" href="{{ route('products.show', $product->id) }}">
        <div class="post-img">
            <img src="{{ asset($product->image) }}" alt="">
        </div>
        <div class="post-content">
            <div class="bg-shapes">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="post-catagory d-block">{{ number_format($product->price) }}</div>
            <div class="post-title" href="blog-details.html">{{ $product->name }}</div>
        </div>
    </a>
</div>