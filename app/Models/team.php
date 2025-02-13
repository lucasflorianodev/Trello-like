<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Um time pode ter vários usuários.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Um time pode ter vários quadros (boards).
     */
    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}