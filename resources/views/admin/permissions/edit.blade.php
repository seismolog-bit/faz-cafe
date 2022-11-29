@extends('layouts.admin')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Update permission</h1>
    <div class="lead">
        Edit permission and manage permissions.
    </div>

    <div class="container mt-4">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input value="{{ $permission->name }}" 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    placeholder="Name" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan perubahan</button>
            <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Batal</a>
        </form>
    </div>

</div>
@endsection
