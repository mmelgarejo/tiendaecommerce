<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }

    public function listUsers() {
        return view('admin.users.index');
    }

    public function editUsers(User $user) {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function updateUsers(Request $request, User $user) {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.index');
    }
}
