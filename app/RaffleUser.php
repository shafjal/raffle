<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaffleUser extends Model
{
                    protected $fillable = [
        'id', 'name','phone','ticket_number','amount',
    ];
}
