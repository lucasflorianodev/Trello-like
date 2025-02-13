<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        'board_id'
    ];
    /**
     * Uma tarefa pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Uma tarefa pertence a um quadro.
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}