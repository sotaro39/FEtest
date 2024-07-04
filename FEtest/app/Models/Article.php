<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;


    // public static function getAllOrderByCreated_at()
    // {
    //     コメント作成した日時を降順に取得　最新が一番上にくるように
    //     return self::orderBy('created_at', 'desc')->get();
    // }
    public function oldestComment()
    {
        return $this->hasOne(Comment::class)->oldestOfMany('created_at');
    }

    public function comments()
    {
        // articleテーブルがcommentテーブルに対して 1対多
        return $this->hasMany(Comment::class);
    }

    public function latestComment()
    {
        // articleテーブルがcommentテーブルに対して 1対1 &　最新のコメントを取得
        return $this->hasOne(Comment::class)->latestOfMany('created_at');
    }
}
