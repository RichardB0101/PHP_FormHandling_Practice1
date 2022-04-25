<?php

//OOP exercises

class Character{
    protected $name;
    protected $class;
    protected $level;


    //creating constructor, to set names on object creation
    function __construct($name, $class, $level){
        $this->name = $name;
        $this->class = $class;
        $this->level = $level;  
    }
    
    function getName(){
        return $this->name;
    }
    function getClass(){
        return $this->class;
    }
    function getLevel(){
        return $this->level;
    }


    }
    

echo "<h2>PHP OOP exercises:</h2>";

$lancelot = new Character("Lancelot642", "Knight", 1);