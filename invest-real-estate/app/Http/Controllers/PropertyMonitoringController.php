<?php

namespace App\Http\Controllers;

use App\Models\PropertyMonitoring;
use Illuminate\Http\Request;

class PropertyMonitoringController extends Controller
{
    public function index() { return response()->json(\App\Models\PropertyMonitoring::all()); }
    public function store(Request $request) { return response()->json(\App\Models\PropertyMonitoring::create($request->all()), 201); }
    public function show($id) { return response()->json(\App\Models\PropertyMonitoring::findOrFail($id)); }
    public function update(Request $request, $id) {
        $monitor = \App\Models\PropertyMonitoring::findOrFail($id);
        $monitor->update($request->all());
        return response()->json($monitor);
    }
    public function destroy($id) {
        \App\Models\PropertyMonitoring::destroy($id);
        return response()->json(null, 204);
    }
}
