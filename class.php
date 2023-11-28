<?php 

class Team{
    protected string $name;

    protected array $members = [];

    protected string $date;

    public function __construct($name,$members,$date){
        $this->name = $name;
        $this->members = $members;
        $this->date = $date;
    }

    public static function start(...$params){
        return new static(...$params);
    }

    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function date(){
        return $this->date;
    }

}

$team=Team::start('Acme',['John Doe','Jane Doe'],'today');
var_dump($team->date());