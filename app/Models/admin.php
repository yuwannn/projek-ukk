<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class admin extends Authenticatable implements AuthenticatableContract
{
    protected $table = 'admins';
}
