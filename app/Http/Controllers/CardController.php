<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function store(Request $request, $listId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        return Card::create([
            'title' => $request->title,
            'description' => $request->description,
            'list_id' => $listId,
            'position' => Card::where('list_id', $listId)->count(),
        ]);
    }
}