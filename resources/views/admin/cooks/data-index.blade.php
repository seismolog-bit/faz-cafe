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
    <td class="table white-space-nowrap text-center">
        {{ $item->note ?? '-' }}
    </td>
    <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-center">
        @if ($item->is_delivery == 'pending')
        <form action="{{ route('admin.cooks.cooking', $item) }}" method="post">
            @csrf
            <button class="btn btn-sm btn-warning" type="submit">
                Sedang dibuat
            </button>
        </form>
        @else
        <form action="{{ route('admin.cooks.update', $item) }}" method="post">
            @csrf
            <button class="btn btn-sm btn-primary" type="submit">
                Siap Antar
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