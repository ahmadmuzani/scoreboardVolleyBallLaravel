<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Increment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_team1',
        'name_team2',
        'score_team1',
        'score_team2',
    ];
}
