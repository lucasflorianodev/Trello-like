<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'team_id'];

    /**
     * Um quadro pertence a um time.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Um quadro pode ter várias tarefas.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}