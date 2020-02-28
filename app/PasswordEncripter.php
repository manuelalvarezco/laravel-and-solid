<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordEncripter extends Model
{
    public static function encripterPassword($password)
    {
        return encrypt($password);
    }
}
