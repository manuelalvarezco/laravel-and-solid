<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

/* Esta clase se encargará de comunicarse con las clases de l ORM de laravel */
class UserRepository extends Model
{
    public function create($userData):User
    {
        return User::create($userData->all());
    }
}
