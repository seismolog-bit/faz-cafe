<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <input type="text" class="form-control" wire:model="search" placeholder="Cari menu">
        </div>
        <div class="row gx-3 gy-4 mb-8">
            @foreach ($products as $product)
            <div class="col-sm-4 col-md-4 col-xxl-2">
                <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div>
                                <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                    <img class="img-fluid rounded-3" src="{{ asset($product->image) }}" alt="">
                                </div>
                                <a class="stretched-link text-decoration-none" type="button"
                                    data-bs-toggle="modal" data-bs-target="#tableAdd{{ $product->id }}">
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-3">{{ $product->name }}</p>
                                </a>
                                <div class="modal fade" id="tableAdd{{ $product->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('admin.order-items.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                <input type="hidden" value="{{ $order->id }}" name="order_id">
                                                {{-- <input type="hidden" value="1" name="quantity"> --}}
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tableShowLabel">Tambah pesanan
                                                    </h5>
                                                    <button class="btn p-1" type="button"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span class="fas fa-times fs--1"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- <div class="text-center">
                                                        <img class="img-fluid mb-5 rounded-3"
                                                            src="{{ asset($product->image) }}" alt=""
                                                            style="width: 125px;">
                                                    </div> --}}
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="nameLabel">Produk
                                                                </label>
                                                                <input class="form-control" id="nameLabel"
                                                                    type="text" value="{{ $product->name }}"
                                                                    readonly />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="categoryLabel">Kategori </label>
                                                                <input class="form-control" id="categoryLabel"
                                                                    type="text"
                                                                    value="{{ $product->category->name }}"
                                                                    readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="qtyLabel">Qty </label>
                                                        <input class="form-control" id="qtyLabel" type="number"
                                                            name="qty" value="{{ old('qty') }}"
                                                            required />
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="qtyLabel">Catatan </label>
                                                        <textarea class="form-control" id="qtyLabel" name="note" > {{ old('note') }} </textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary"
                                                        type="submit">Tambahkan</button>
                                                    <button class="btn btn-outline-primary" type="button"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    {{-- <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                                    --}}
                                    <h4 class="text-1100 mb-0">{{ number_format($product->price) }}</h4>
                                </div>
                                {{-- <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">{{ $product->category->name }} --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>