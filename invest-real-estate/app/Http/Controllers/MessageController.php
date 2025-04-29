<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {
        return response()->json(\App\Models\Message::all());
    }
    public function store(Request $request) {
        return response()->json(\App\Models\Message::create($request->all()), 201);
    }
    public function show($id) {
        return response()->json(\App\Models\Message::findOrFail($id));
    }
    public function update(Request $request, $id) {
        $msg = \App\Models\Message::findOrFail($id);
        $msg->update($request->all());
        return response()->json($msg);
    }
    public function destroy($id) {
        \App\Models\Message::destroy($id);
        return response()->json(null, 204);
    }
}
