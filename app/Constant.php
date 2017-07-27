<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    //alimessage
     const ALIACCESSKEY="LTAIpJBWkxOTP6iK";
     const ALIACCESSSECRET="dPbyKmZoPsWQMkKFOYPRgqBxiecrTc";


   //statue code
    const ERROR_CODE=1;
    const SUCCESS_CODE=0;

   //statue message
   const STATE_OK_MESSAGE="success";
   const STATE_NO_PHONENUM="not found phone number";
}
