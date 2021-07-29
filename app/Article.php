<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //テーブル内容
    protected $fillable = [
        'title', 'body',
    ];
}
