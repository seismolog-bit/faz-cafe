<div>
    @foreach ($orders as $order)
        <div class="card mb-2">
            <div class="card-body">
                <div class="badge badge-phoenix fs--2 badge-phoenix-secondary mb-2">
                    <span class="fw-bold">{{ $order->table->name }} - Lantai {{ $order->table->floor }}</span>
                </div>
                <h4 data-countdown="{{ Carbon\Carbon::parse($order->end_time) }}"></h4>
            </div>
        </div>
    @endforeach
</div>
