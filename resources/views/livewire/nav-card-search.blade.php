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
            <a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('admin.orders.edit', $item) }}">
                <div class="file-thumbnail me-2">
                    {{-- <img class="h-100 w-100 fit-cover rounded-3" src="../../assets/img/products/3.png" alt=""> --}}
                    <i class="fa-solid fa-credit-card text-primary w-100 h-100 fit-cover"></i>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 text-1000 title">{{ $item->code }}</h6>
                  <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                </div>
              </a>
            @endforeach
            {{--
        </div> --}}
    </div>
    @endempty

</div>