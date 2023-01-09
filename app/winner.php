<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class winner extends Model
{
                   protected $fillable = [
        'id', 'name','phone','ticket_number'
    ];
}
