@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Transaksi</a></li>
        <li class="breadcrumb-item active">Checkout</li>
    </ol>
</nav>

<h2 class="text-bold text-1100 mb-2">Checkout</h2>
<div class="d-flex flex-wrap flex-between-center mb-4">
    <p class="text-800 lh-sm mb-0">Kasir : <span class="fw-bold"> Administrator</span></p>
    <div class="d-flex">
        <a class="btn pe-3 ps-0 text-900 text-primary" type="button" data-bs-toggle="modal"
            data-bs-target="#updateTable">
            <i class="fa-solid fa-arrows-spin"></i> Pindahkan table
        </a>
        <div class="modal fade" id="updateTable" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.orders.update-table', $order->id) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="tableShowLabel">Ubah meja
                            </h5>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span class="fas fa-times fs--1"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="qtyLabel">Table Baru </label>
                                <select class="form-select mb-4" aria-label="delivery type" name="table_id" required>
                                    @foreach ($tables as $table)
                                    <option value="{{ $table->id }}" >{{ $table->name }} {{ $table->is_billiard ? '- Lantai' . $table->floor : '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                            <button class="btn btn-outline-primary" type="button"
                                data-bs-dismiss="modal">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($order->is_billiard)
        <a class="btn pe-3 ps-0 text-900 text-primary" href="{{ route('admin.tables.lamp', $order->table->turn_on) }}">
            <i class="fa-regular fa-lightbulb me-2"></i> Nyalakan lampu
        </a>
        <a class="btn pe-3 ps-0 text-900 text-danger" href="{{ route('admin.tables.lamp', $order->table->turn_off) }}">
            <i class="fa-solid fa-lightbulb me-2"></i> Matikan lampu
        </a>
        @endif
        
    </div>
</div>
<div class="row g-5">
    <div class="col-12 col-md-8 mb-2">
        <div id="cartTable"
            data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:10}">
            <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle fs--2 asc" scope="col"></th>
                            <th class="sort white-space-nowrap align-middle asc" scope="col" style="min-width:250px;">
                                PRODUCTS</th>
                            <th class="sort align-middle asc" scope="col" style="width:80px;">KATEGORI</th>
                            <th class="sort align-middle text-end asc" scope="col" style="width:150px;">HARGA</th>
                            <th class="sort align-middle text-center asc" scope="col" style="width:300px;">QTY</th>
                            {{-- <th class="sort align-middle ps-5 asc" scope="col" style="width:200px;">QUANTITY</th>
                            --}}
                            <th class="sort align-middle text-end asc" scope="col" style="width:250px;">TOTAL</th>
                            <th class="sort align-middle text-end asc" scope="col" style="width:250px;">STATUS</th>
                            <th class="sort align-middle text-end asc" scope="col" style="width:250px;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-latest-review-body">
                        @foreach ($order->order_items as $item)
                        <tr class="cart-table-row btn-reveal-trigger">
                            <td class="align-middle white-space-nowrap py-0">
                                <div class="avatar avatar-xl">
                                    <div class="avatar-name rounded">
                                        <span>{{ substr($item->product->name, 0, 1) }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="products align-middle">
                                <div class="fw-semi-bold mb-0 line-clamp-2">{{ $item->product->name }}</div>
                            </td>
                            <td class="color align-middle white-space-nowrap fs--1 text-900">{{
                                $item->product->category->name }}</td>
                            <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold text-end">{{
                                number_format($item->price) }}</td>
                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-center">{{ $item->qty }}</td>
                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">{{number_format($item->total) }}</td>
                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end {{ !$item->payment ? 'text-danger' : '' }} ">{{ $item->payment ? $item->payment_method : 'Belum dibayar' }}
                            </td>

                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                    <button
                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">
                                        <i class="fas fa-ellipsis"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                        @if ($item->payment)
                                        <a class="dropdown-item" href="{{ route('admin.order-items.change_method_payment', $item->id) }}">Ubah metode pembayaran</a>
                                        @else
                                        <form action="{{ route('admin.order-items.payment_method', $item->id) }}" method="post">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="payment_method" value="Cash">
                                            <button class="dropdown-item" type="submit">Cash</button>
                                        </form>
                                        <form action="{{ route('admin.order-items.payment_method', $item->id) }}" method="post">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="payment_method" value="Transfer">
                                            <button class="dropdown-item" type="submit">Transfer</button>
                                        </form>
                                        @endif
                                        {{-- <form action="{{ route('admin.order-items.destroy_item', $item->id) }}" method="DELETE">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="payment_method" value="Transfer">
                                            <button class="dropdown-item" type="submit">Hapus</button>
                                        </form> --}}

                                        <hr>

                                        @if ($item->payment)
                                        <a class="dropdown-item" href="{{ route('admin.order-items.destroy_payment', $item->id) }}">Hapus pembayaran</a>
                                        @endif

                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.order-items.destroy_item', $item->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus item', ['class' => 'dropdown-item']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        @endforeach
                        <tr class="cart-table-row btn-reveal-trigger">
                            <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="7">Subtotal:</td>
                            <td class="text-1100 fw-bold text-end fs-0">{{ number_format($order->grand_total) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <form action="{{ route('admin.orders.finish', $order) }}" method="post">
            @method('patch')
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-between-center mb-3">
                        <h3 class="card-title mb-0">Detail</h3>
                        {{-- <a class="btn btn-link p-0" href="#!">Edit pesanan </a> --}}
                    </div>
                    
                    <div>
                        <div class="d-flex justify-content-between">
                            <p class="text-900 fw-semi-bold">Pembeli :</p>
                            <p class="text-1100 fw-semi-bold">{{ $order->buyer }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-900 fw-semi-bold">Meja :</p>
                            <p class="text-1100 fw-semi-bold">{{ $order->table->name }}</p>
                        </div>
    
                        
                        <div class="d-flex justify-content-between">
                            <p class="text-900 fw-semi-bold">Metode Pembayaran :</p>
                            <p class="text-1100 fw-semi-bold"></p>
                        </div>
                        <select class="form-select mb-3" aria-label="delivery type" name="payment_method" required>
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="border-dashed border-bottom mt-4">
                        {{-- <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                            <h5 class="text-900 fw-semi-bold">{{ number_format($order->grand_total) }}</h5>
                        </div> --}}
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-900 fw-semi-bold">Sudah dibayar: </h5>
                            <h5 class="text-900 fw-semi-bold">{{ number_format($order->order_items->where('payment', 1)->sum('grand_total')) }}</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-900 fw-semi-bold">Belum dibayar: </h5>
                            <h5 class="text-900 fw-semi-bold text-danger">{{ number_format($order->order_items->where('payment', 0)->sum('grand_total')) }}</h5>
                        </div>
                    </div>

                    {{-- <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Voucher">
                        <button class="btn btn-phoenix-primary px-5">Apply</button>
                    </div> --}}
                    <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                        <h4 class="mb-0">Total :</h4>
                        <h4 class="mb-">{{ number_format($order->grand_total) }}</h4>
                    </div>
                    <a class="btn btn-secondary w-100 mb-2" href="{{ route('admin.orders.receipt', $order) }}" >Cetak Struk
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button class="btn btn-primary w-100" type="submit">Selesaikan pesanan
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection