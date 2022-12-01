@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.users.index') }}">Users</a>
        </li>
        <li class="breadcrumb-item active">Detail user</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Profile {{ $user->name }}</h2>
    </div>
    <div class="col-auto">
        <div class="row g-2 g-sm-3">
            <div class="col-auto">
                <a class="btn {{ $user->status ? 'btn-phoenix-danger' : 'btn-phoenix-primary' }} "
                    href="{{ route('admin.users.activate', $user) }}">
                    {{-- {{ $user->status ? '' : '' }} --}}
                    @if ($user->status)
                    <i class="fas fa-user-xmark"></i> Nonaktifkan
                    @else
                    <i class="fas fa-user-plus"></i> Aktifkan User
                    @endif
                </a>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('admin.users.update', $user) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="fas fa-times fs--1"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input value="{{ $user->name }}" type="text" class="form-control" name="name"
                                            placeholder="Name" required>

                                        @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input value="{{ $user->email }}" type="email" class="form-control" name="email"
                                            placeholder="Email address" readonly>
                                        @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No HP</label>
                                        <input value="{{ $user->no_hp }}" type="number" class="form-control"
                                            name="no_hp" placeholder="08XX XXXX XXXX">
                                        @if ($errors->has('no_hp'))
                                        <span class="text-danger text-left">{{ $errors->first('no_hp') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-control" name="role" required>
                                            <option value="">Select role</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ in_array($role->name, $userRole)
                                                ? 'selected'
                                                : '' }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('role'))
                                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Simpan perubahan</button>
                                    <button class="btn btn-outline-primary" type="button"
                                        data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-6">
    <div class="col-12 col-lg-8">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                    <div class="col-12 col-sm-auto">
                        <div class="avatar avatar-5xl">
                            <img class="rounded-circle" src="{{ asset($user->avatar) }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-auto flex-1">
                        <h3>{{ $user->name }}</h3>
                        <p class="text-800">Ditambahkan pada {{ $user->created_at->format('d m Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="border-bottom border-dashed border-300">
                    <h4 class="mb-3 lh-sm lh-xl-1">Detail</h4>
                </div>
                <div class="border-top border-dashed border-300 pt-4">
                    <div class="row flex-between-center mb-2">
                        <div class="col-auto">
                            <h5 class="text-1000 mb-0">Email</h5>
                        </div>
                        <div class="col-auto">
                            <a class="lh-1" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                        </div>
                    </div>
                    <div class="row flex-between-center mb-2">
                        <div class="col-auto">
                            <h5 class="text-1000 mb-0">No HP</h5>
                        </div>
                        <div class="col-auto">
                            <a class="text-800" href="tel:{{ $user->no_hp }}">{{ $user->no_hp }}</a>
                        </div>
                    </div>
                    <div class="row flex-between-center">
                        <div class="col-auto">
                            <h5 class="text-1000 mb-0">Role</h5>
                        </div>
                        <div class="col-auto">
                            <p class="lh-1">
                                @foreach ($user->roles as $role)
                                {{ ucfirst($role->name) }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection