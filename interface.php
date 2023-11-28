<?php

interface Developer
{    
    public function getStack():string;
    public function getSalary():string;
    public function getYearsOfExperience():int;
}

class LaravelDeveloper implements Developer
{
    protected string $stack;
    protected int $yearsOfExperience;
    protected int $salary;

    public function __construct(string $stack,int $yearsOfExperience,int $salary)
    {
        $this->stack = $stack;
        $this->yearsOfExperience = $yearsOfExperience;
        $this->salary = $salary;
    }

    public function getStack():string
    {
        return $this->stack;
    }

    public function getSalary():string
    {
        return "I get {$this->salary} per month as a {$this->getStack()} developer";
    }

    public function getYearsOfExperience():int
    {
        return $this->yearsOfExperience;
    }
}

class JsDeveloper implements Developer{
    protected string $stack;
    protected int $yearsOfExperience;
    protected int $salary;

    public function __construct(string $stack,int $yearsOfExperience,int $salary)
    {
        $this->stack = $stack;
        $this->yearsOfExperience = $yearsOfExperience;
        $this->salary = $salary;
    }

    public function getStack():string
    {
        return $this->stack;
    }

    public function getSalary():string
    {
        return "I get {$this->salary} per month as a {$this->getStack()} developer";
    }

    public function getYearsOfExperience():int
    {
        return $this->yearsOfExperience;
    }
}

class DeveloperController{
    public static function develeper(Developer $developer){
        return $developer->getSalary();
    }
}

echo DeveloperController::develeper(new JsDeveloper("JS",2,4000));