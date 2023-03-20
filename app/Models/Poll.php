<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
