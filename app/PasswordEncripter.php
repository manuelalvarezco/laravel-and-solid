<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordEncripter extends Model
{
    public function encripterPassword($password)
    {
        return encrypt($password);
    }
}
