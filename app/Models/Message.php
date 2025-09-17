<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Specify the table name
    protected $table = 'message';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
