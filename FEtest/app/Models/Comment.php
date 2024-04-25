<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function topic()
    {
        return $this->belongsTo(Article::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
