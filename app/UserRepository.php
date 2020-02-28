<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PasswordEncripter;

/* Esta clase se encargará de comunicarse con las clases de l ORM de laravel */
class UserRepository extends Model
{
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => PasswordEncripter::encripterPassword($data['password']),
        ]);
    }
}
