<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class BoardController extends Controller
{
    public function index(): Collection
    {
        return Board::where('user_id', auth()->id())->get();
    }

    public function store(Request $request): Board
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        return Board::create([
            'name' => $request->name,
            'user_id' => auth()->id()
        ]);
    }

    public function destroy(Board $board): JsonResponse
    {
        if ($board->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $board->delete();
        return response()->noContent();
    }
}