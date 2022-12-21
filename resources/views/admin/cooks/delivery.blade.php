@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Siap Antar</h2>
    </div>
</div>

{{-- <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3> --}}

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown dropdown-notifications">
        <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
          <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
        </a>

        <div class="dropdown-container">
          <div class="dropdown-toolbar">
            <div class="dropdown-toolbar-actions">
              <a href="#">Mark all as read</a>
            </div>
            {{-- <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3> --}}
          </div>
          <ul class="dropdown-menu">
          </ul>
          <div class="dropdown-footer text-center">
            <a href="#">View All</a>
          </div>
        </div>
      </li>
      <li><a href="#">Timeline</a></li>
      <li><a href="#">Friends</a></li>
    </ul>
  </div>

<div id="members"
    data-list='{"valueNames":["item","buyer","table","qty","date"],"page":15,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Search"
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center">
                {{-- <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                    <span class="fas fa-plus me-2"></span>Tambah user
                </a> --}}
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="item"  style="width:20%;  min-width: 200px;">MENU</th>
                        <th class="sort align-middle" scope="col" data-sort="buyer"  style="width:20%;  min-width: 150px;">PELANGGAN</th>
                        {{-- <th class="sort align-middle" scope="col" data-sort="table" style="width: 10%; min-width: 50px;">MEJA</th> --}}
                        <th class="sort align-middle text-center" scope="col" data-sort="qty" style="width: 10%; min-width: 50px;"> QTY</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width: 15%;">AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    {{-- @if (is_array($order_items) || is_object($order_items)) --}}
                    
                    {{-- @endif --}}
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                    class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>

<script>
    function fetchdata(){
        $.get("{{ route('admin.cooks.fetch_item_delivery') }}", {}, function(data, status) {
            $("#table-latest-review-body").html(data);
        });
    }

    $(document).ready(function(){
        setInterval(fetchdata,2000);
    });
</script>
@endsection