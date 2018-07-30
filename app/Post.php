<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RecordsActivity;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
}
