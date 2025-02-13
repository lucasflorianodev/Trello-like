<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'board_id',
        'user_id'
    ];
    /**
     * Um card pertence a um quadro (board).
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    /**
     * Um card pode estar associado a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}