<?php

abstract class DeveloperAbstract{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType():string
    {
        return $this->type;
    }
    abstract public function getSalary():string;
}

class LaravelDeveloperAbstract extends DeveloperAbstract{
    public function getSalary():string
    {
        return "I get $2500 per month as a {$this->getType()} developer";
    }
}

$larave=new LaravelDeveloperAbstract("Laravel");

echo $larave->getSalary();