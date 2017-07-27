<?php

namespace App\Http\Controllers\Account;

use App\Account\RegisterCode;
use App\Constant;
use App\Http\Libs\Account\MessageManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    private $messageManager;

    public function __construct()
    {
        $this->messageManager=new MessageManager;
    }


    public function register(Request $request)
    {
        if(!$request->has("phoneNum"))
        {
            return;
        }
        if(!$request->has("registerCode"))
        {
            return;
        }

        if(!$request->has("passWord"))
        {
            retrun;
        }

        $phoneNum=$request->input("phoneNum");
        $registerCode=$request->input("registerCode");
        $passWord=$request->input("passWord");
        $token="4574857457485485485475845748574";
        DB::table('users')->insert(['name' => '','phonenum'=>strval($phoneNum),'password'=>strval($passWord),'remember_token'=>strval($token),'created_at'=>date('Y-m-d-H:i:s',time()),'updated_at'=>date('Y-m-d-H:i:s',time())]);
    }


    public function getRegisterCode(Request $request)
    {

        if($request->has("phoneNum"))
        {
            $phoneNum=$request->input("phoneNum");
        }
        else
        {
            return json_encode(array("code"=>Constant::ERROR_CODE,"message"=>Constant::STATE_NO_PHONENUM));
        }

        $code=$this->generateReigsterCode();
        $sendMessageResult=$this->messageManager->sendSms("SMS_79135043",$phoneNum,array("code"=>"12345"));
        if($sendMessageResult->result=="OK")
        {
            $registerCode = new RegisterCode();
            $registerCode->addRegisterCode(time(), strval($code), time() + 60 * 10);
        }
    }

    private function generateReigsterCode()
    {
        $result="";
        for($i=0;$i<6;$i++)
        {
            $result=$result.rand(0,9);
        }
        return $result;
    }


}
