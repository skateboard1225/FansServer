<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function hasLogin($userName,$passWord)
    {
        $result=Users::where("name",$userName)->where("password",$passWord)->get();
        return $result;
    }

    public function addUser(array $data)
    {

    }
}
