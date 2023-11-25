<?php

namespace App\Http\Controllers\pages\security;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages/security/role/index');
    }

    public function create(Request $request) {}

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
