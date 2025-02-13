<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListModel; // Ensure this class exists in the specified namespace

class ListControllers extends Controller
{
    public function store(Request $request, $boardId)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return ListModel::create([
            'name' => $request->name,
            'board_id' => $boardId,
            'position' => ListModel::where('board_id', $boardId)->count(),
        ]);
    }
}