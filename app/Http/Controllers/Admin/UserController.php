<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create() 
    {
        return view('admin.users.create');
    }

    public function store(User $user, StoreUserRequest $request) 
    {
        $user->create(array_merge($request->validated(), [
            'password' => Hash::make($request->password)
        ]));

        return redirect()->route('admin.users.index')
            ->withSuccess(__('User created successfully.'));
    }

    public function show(User $user) 
    {
        return view('admin.users.show', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    public function edit(User $user) 
    {
        return view('admin.users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    public function update(User $user, UpdateUserRequest $request) 
    {
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        return redirect()->route('admin.users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    public function destroy(User $user) 
    {
        $user->delete();

        return redirect()->route('admin.users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    public function activate(User $user)
    {
        $user->update([
            'status' => !$user->status
        ]);

        return redirect()->back()->with('success', 'Status updated');
    }
}
