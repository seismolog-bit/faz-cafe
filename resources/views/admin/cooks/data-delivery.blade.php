@forelse ($order_items as $item)
<tr class="hover-actions-trigger btn-reveal-trigger position-static">
    <td class="buyer white-space-nowrap">
        {{ $item->product->name }}
    </td>
    <td class="buyer white-space-nowrap">
        {{ $item->order->buyer }} - {{ $item->order->table->name }} {{ $item->order->is_billiard ? ' Lantai ' .
        $item->order->table->floor : ''}}
    </td>

    <td class="table white-space-nowrap text-center">
        {{ $item->qty }}
    </td>
    <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
        @if ($item->is_delivery == 'cooking')
        <button class="btn btn-secondary" disabled>
            Sedang dibuat
        </button>
        @else
        <form action="{{ route('admin.cooks.finish', $item) }}" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">
                <span class="fas fa-check me-2"></span>Selesaikan
            </button>
        </form>
        @endif
    </td>

</tr>
@empty
<tr>
    <td colspan="4">Belum ada pesanan yang harus di antar</td>
</tr>
@endforelse