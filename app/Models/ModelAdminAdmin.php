<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'subject', 'message',
    ];



    use Notifiable;
}
