@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
        <li class="breadcrumb-item active">Tambah user</li>
    </ol>
</nav>
<h2 class="text-bold text-1100 mb-5">Permissions</h2>

<div class="container mt-4">
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input value="{{ old('name') }}" 
                type="text" 
                class="form-control" 
                name="name" 
                placeholder="Name" required>

            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="{{ old('email') }}"
                type="email" 
                class="form-control" 
                name="email" 
                placeholder="Email" required>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input value="{{ old('no_hp') }}"
                type="number" 
                class="form-control" 
                name="no_hp" 
                placeholder="08XX XXXX XXXX" required>
            @if ($errors->has('no_hp'))
                <span class="text-danger text-left">{{ $errors->first('no_hp') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input value="{{ old('password') }}"
                type="password" 
                class="form-control" 
                name="password" 
                placeholder="******" required>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Tambahkan</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Kembali</a>
    </form>
</div>
@endsection