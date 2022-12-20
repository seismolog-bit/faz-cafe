<div class="search-box d-none d-sm-block" style="min-width:8rem;">
    <div class="position-relative" data-bs-toggle="search" data-bs-display="static">
        <input class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search"
            placeholder="Cari kode kartu" wire:model="search" aria-label="Search" />
        <span class="fas fa-search search-box-icon"></span>
    </div>
    <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
        data-bs-dismiss="search">
        <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
    </div>
    @empty(!$cards)
    <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
        {{-- <div class="scrollbar list" style="max-height: 30rem;"> --}}
            @foreach ($cards as $item)
            <a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('admin.orders.edit', $item->order_active) }}">
                <div class="file-thumbnail me-2">
                    @if ($item->order_active->is_billiard)
                    <i class="fa-solid fa-rocket text-primary w-100 h-100 fit-cover"></i>
                    
                    @else
                    <i class="fa-solid fa-mug-hot text-warning w-100 h-100 fit-cover"></i>
                        
                    @endif
                </div>
                <div class="flex-1">
                    <h6 class="mb-0 text-1000 title">{{ $item->code }}</h6>
                    <p class="fs--2 mb-0 d-flex text-700">
                        <span class="fw-medium text-600">{{ $item->order_active->table->name }} {{ $item->order_active->is_billiard ? ' Lantai '. $item->order_active->table->floor : '' }} </span>
                    </p>
                </div>
            </a>
            @endforeach
            {{--
        </div> --}}
    </div>
    @endempty

</div>