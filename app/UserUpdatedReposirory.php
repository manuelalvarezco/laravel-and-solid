<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PasswordEncripter;


class UserUpdatedReposirory extends Model
{
    public function update($data):User
    {
        return User::update($data->all());
    }
}
