<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(Request $request)
    {
            if($request->has("token"))
            {
                $token=$request->input("token");
                return $this->loginByToken($token);
            }
            else
            {
                if($request->has("userName") && $request->has("passWord"))
                {
                    $userName=$request->input("userName");
                    $passWord=$request->input("passWord");
                    return $this->loginByUserName($userName,$passWord);
                }
                else
                {

                }
            }
    }


    private function loginByToken($token)
    {

    }

    private function loginByUserName($userName,$passWord)
    {

    }
}
