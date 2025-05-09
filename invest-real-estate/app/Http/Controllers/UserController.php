<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return response()->json(User::all());
    }

    public function store(Request $request) {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show(User $user) {
        return response()->json($user);
    }

    public function update(Request $request, User $user) {
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy(User $user) {
        $user->delete();
        return response()->json(null, 204);
    }
}
