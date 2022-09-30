<?php
spl_autoload_register(function($className){
    $classFile = 'render/' .$className .'.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});

$test = new Test('test');
echo $test;