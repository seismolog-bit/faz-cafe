@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item active">Show Role</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
      <h2 class="mb-0">Role {{ $role->name }}</h2>
    </div>
  </div>
<div id="members" data-list='{"valueNames":["name"],"page":10,"pagination":true}'>
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
                <a class="btn btn-primary" href="{{ route('admin.roles.edit', $role) }}">
                    <span class="fas fa-edit me-2"></span>Ubah role
                </a>
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="name">NAMA</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($rolePermissions as $permission)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="name align-middle white-space-nowrap text-900">{{ $permission->name }}</td>
                        <td class="align-middle white-space-nowrap text-end pe-0">
                          </td>
                    </tr>
                    @endforeach
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