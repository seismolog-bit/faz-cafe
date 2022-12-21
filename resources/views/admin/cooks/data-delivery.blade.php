@forelse ($order_items as $item)
<tr class="hover-actions-trigger btn-reveal-trigger position-static">
    <td class="buyer white-space-nowrap">
        {{ $item->product->name }}
    </td>
    <td class="buyer white-space-nowrap">
        {{ $item->order->buyer }}
    </td>
    <td class="table white-space-nowrap">
        {{ $item->order->table->name }} - Lantai {{ $item->order->table->floor}}
    </td>

    <td class="table white-space-nowrap text-center">
        {{ $item->qty }}
    </td>
    <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
        <form action="{{ route('admin.cooks.finish', $item) }}" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">
                <span class="fas fa-check me-2"></span>Selesaikan
            </button>
        </form>
    </td>

</tr>
@empty
<tr>
    <td colspan="5">Belum ada pesanan yang harus di antar</td>
</tr>
@endforelse