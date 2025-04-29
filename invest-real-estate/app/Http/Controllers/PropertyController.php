<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() { return response()->json(\App\Models\Property::all()); }
    public function store(Request $request) { return response()->json(\App\Models\Property::create($request->all()), 201); }
    public function show($id) { return response()->json(\App\Models\Property::findOrFail($id)); }
    public function update(Request $request, $id) {
        $property = \App\Models\Property::findOrFail($id);
        $property->update($request->all());
        return response()->json($property);
    }
    public function destroy($id) {
        \App\Models\Property::destroy($id);
        return response()->json(null, 204);
    }
}
