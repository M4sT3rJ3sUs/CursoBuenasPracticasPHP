<?php
class Animal{
    public function flyingAnimal(){
        //...//
    }
}

class Dog extends Animal{
    public function flyingAnimal (){
        if (! $this->hasWings) {
            throw new Exception;
        } elseif($this->hasWings) {
            flyingAnimal();
        }
    }
}