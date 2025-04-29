<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    public function index() { return response()->json(\App\Models\ConsultationRequest::all()); }
    public function store(Request $request) { return response()->json(\App\Models\ConsultationRequest::create($request->all()), 201); }
    public function show($id) { return response()->json(\App\Models\ConsultationRequest::findOrFail($id)); }
    public function update(Request $request, $id) {
        $req = \App\Models\ConsultationRequest::findOrFail($id);
        $req->update($request->all());
        return response()->json($req);
    }
    public function destroy($id) {
        \App\Models\ConsultationRequest::destroy($id);
        return response()->json(null, 204);
    }
}
