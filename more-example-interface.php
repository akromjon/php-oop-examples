<?php

Interface Provider
{
    public function status():bool;
    public function send():void;
}

abstract class SMS{
    protected string $message;

    protected string $endPoint="";

    protected bool $status;
    protected string $phoneNumber;

    public function __construct(string $message,string $phoneNumber){
        $this->message = $message;
        $this->phoneNumber = $phoneNumber;
    }

    public function status():bool{
        return $this->status;
    }   

}

class Uzmobile extends SMS implements Provider
{    

    protected string $endPoint="https://uzmobile.uz/api/sms";   
       

    public function send():void
    {
       echo "{$this->endPoint}\n";
    }
}
class Ucell extends SMS implements Provider{

    protected string $endPoint="https://ucell.uz/api/sms";       

    public function send():void{

    
       echo "{$this->endPoint}\n";
       
        
    }
}

class SMSSender
{
   public static function message(Provider $provider):void
   {
        $provider->send();
   }
}

$smsSender=SMSSender::message(new Ucell("Hello Ucell","998939876543"));
$smsSender=SMSSender::message(new Uzmobile("Hello Uzmobile","998999876543"));

