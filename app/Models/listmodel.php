<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'board_id',
        'position'
    ];

    /**
     * Uma lista pertence a um quadro (board).
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    /**
     * Uma lista pode ter vários cards.
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}