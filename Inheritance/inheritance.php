<?php
class Animal{

    private $color;
  //  private $weight;
    
    // public function setColor($color){
    //     $this->color=$color;
    // }

    // public function getColor(){
    //     return $this-> color;
    // }
    public function move(){
        echo ("Animal moves");
    }
}


class Dog extends Animal{
    public function move()
    {
        echo("Dog Runs");  // method over ride
    }

}

class Bird extends Animal{

}

class Fish extends Animal{

}

 $dog = new Dog ();
echo $dog->move();
echo '<br>';

$fish = new Fish ();
echo $fish->move();
echo '<br>';

$bird = new Bird();
echo $bird->move();

// $dog->setColor("Brown");
// echo $dog->getColor();

// echo '<br>';

// $fish=new Fish();
// $fish->setColor("Red");
// echo $fish->getColor();

// echo '<br>';

// $bird=new Bird();
// $fish->setColor("Blue");
// echo $fish->getColor();
