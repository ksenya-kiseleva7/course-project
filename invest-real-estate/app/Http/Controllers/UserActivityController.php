<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use Illuminate\Http\Request;

class UserActivityController extends Controller
{
    public function index() {
        return response()->json(\App\Models\UserActivity::all());
    }
    public function store(Request $request) {
        return response()->json(\App\Models\UserActivity::create($request->all()), 201);
    }
    public function show($id) {
        return response()->json(\App\Models\UserActivity::findOrFail($id));
    }
    public function update(Request $request, $id) {
        $activity = \App\Models\UserActivity::findOrFail($id);
        $activity->update($request->all());
        return response()->json($activity);
    }
    public function destroy($id) {
        \App\Models\UserActivity::destroy($id);
        return response()->json(null, 204);
    }
}
