<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index() {
        return response()->json(\App\Models\Investment::all());
    }
    public function store(Request $request) {
        return response()->json(\App\Models\Investment::create($request->all()), 201);
    }
    public function show($id) {
        return response()->json(\App\Models\Investment::findOrFail($id));
    }
    public function update(Request $request, $id) {
        $investment = \App\Models\Investment::findOrFail($id);
        $investment->update($request->all());
        return response()->json($investment);
    }
    public function destroy($id) {
        \App\Models\Investment::destroy($id);
        return response()->json(null, 204);
    }
}
