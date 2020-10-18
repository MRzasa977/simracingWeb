<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'game', 'user_id', 'raceType'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function leaguePost(){
        return $this->hasMany(LeaguePost::class);
    }
}
