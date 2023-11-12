<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['user1_id', 'user2_id', 'status', 'winner_id'];

    public function user1()
    {
        return $this->belongsTo(User::class);
    }

    public function user2()
    {
        return $this->belongsTo(User::class);
    }

    public function winner()
    {
        return $this->belongsTo(User::class);
    }

    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
}

