<?php

class Sms{
    protected string $message;

    protected string $phoneNumber;

    public function __construct(string $message,string $phoneNumber){
        $this->message = $message;
        $this->phoneNumber = $phoneNumber;
    }

    public function send(){
        $this->validate();
        $this->setUpMessage();
        $this->sendRequest();
        return "Sending SMS with message: to {$this->phoneNumber} with message {$this->message}";
    }

    private function setUpMessage():string
    {
        return "<h1>".$this->message."</h1>";
    }

    private function validate(): bool|Exception
    {
        if(!strlen($this->phoneNumber)>0){
            throw new Exception("Phone is empty");
        }

        return true;
    
    }

    private function sendRequest(): bool
    {        
        if(!strlen($this->message)>0){
            return false;
        }

        return true;
    }
}