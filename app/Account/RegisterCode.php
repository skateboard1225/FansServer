<?php

namespace App\Account;

use Illuminate\Database\Eloquent\Model;

class RegisterCode extends Model
{
    protected $table="registercodes";
    public $timestamps=false;
    public function addRegisterCode($orderId,$registerCode,$deadLine)
    {
        $this->orderId=$orderId;
        $this->registerCode=$registerCode;
        $this->deadLine=$deadLine;
        $this->save();
    }


}
