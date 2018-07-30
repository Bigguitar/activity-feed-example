<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use RecordsActivity;

    protected $fillable = [
        'user_id',
        'post_id',
        'body',
    ];

    protected static $recordEvents = ['created'];
}
