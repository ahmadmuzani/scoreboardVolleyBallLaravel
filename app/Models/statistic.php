<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistic extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'spike1',
        'spike2',
        'block1',
        'block2',
        'serve1',
        'serve2',
        'opponent1',
        'opponent2',
    ];
}
