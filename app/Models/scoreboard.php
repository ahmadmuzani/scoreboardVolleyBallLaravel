<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Carbon;


class scoreboard extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public $table = "admin_scoreboards";
    // protected $table = "scoreboard";
    protected $fillable = [
        'set',
        'logo_team1',
        'logo_team2',
        'team1',
        'team2',
        'score1',
        'score2',
        'spike1',
        'spike2',
        'block1',
        'block2',
        'serve1',
        'serve2',
        'opponent1',
        'opponent2',
        'user_id',
        'created_at',
    ];
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('Y-m-d');
    }
}
