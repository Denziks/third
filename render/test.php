<?php

namespace render;

class test
{
    public $name = 'test';
    public function __construct(string $name){
        $this -> name =  $name;
    }
    public function __toString(){
        return $this ->name;
    }
}