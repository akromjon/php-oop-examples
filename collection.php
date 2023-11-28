<?php

class Collection {
    protected array $items=[];

    public function __construct(array $items){
        $this->items = $items;
    }

    public function sum(string $key):int{
        return array_sum(array_column($this->items,$key));
    }
}

class Video {
    public string $title;
    public int $length;

    public function __construct(string $title,int $length){
        $this->title = $title;
        $this->length = $length;
    }   
}

class VideoCollection extends Collection{
    public function totalLength():int {
        return $this->sum("length");
    }
}

$collection=new VideoCollection([
    new Video('Some Video 1',100),
    new Video('Some Video 2',200),
    new Video('Some Video 3',300),
]);

echo $collection->totalLength();