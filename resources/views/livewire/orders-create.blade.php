<div class="card">
    @if ($errors->any())
    <div class="alert alert-danger">
        There were some errors with your request.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" wire:submit.prevent="submit">
        <div class="card-body">
            <h5 class="card-title mb-4">Detail Pesanan</h5>
            <div class="mb-4">
                <h6>Aktifkan Kartu</h6>
                <p class="mb-2"><small>*Scan kartu untuk mengaktifkan kartu</small></p>
                <div class="mb-2" id="reader" width="320px"></div>
                {{-- <input type="text" name="card_id" class="form-control" required> --}}
                <input class="form-control" id="code" type="text" name="code" readonly placeholder="Scan QRCode Kartu" required />
            </div>
            <div class="mb-4">
                <h6 class="mb-2">Pembeli Atas Nama</h6>
                <input type="text" class="form-control" name="buyer" placeholder="Masukan nama pembeli" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <h6 class="mb-2">Meja</h6>
                <select class="form-select mb-4" aria-label="delivery type" name="table_id" required>
                    @foreach ($tables as $table)
                    <option value="{{ $table->id }}" >{{ $table->name }} Lantai {{ $table->floor }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <h6 class="mb-2">Metode Pembayaran</h6>
                <select class="form-select" aria-label="delivery type" name="payment_method">
                    <option value="Cash">Cash</option>
                    <option value="Transfer">Transfer</option>
                </select>
            </div>
            <div class="mb-4">
                <h6 class="mb-2">Status Pembayaran</h6>
                <select class="form-select" aria-label="delivery type" name="payment_status">
                    <option value="Lunas">Bayar Langsung</option>
                    <option value="Belum Bayar">Bayar Nanti</option>
                </select>
            </div>
            <button class="btn btn-primary w-100" type="submit">Simpan Pesanan
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </form>
</div>