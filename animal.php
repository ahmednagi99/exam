<?php

abstract class Animal
{
    protected $family;
    protected $food;

    public function __construct($family,$food)
    {
        $this->family=$family;
        $this->food=$food;
    }

    public abstract function getFamily():string;


    public abstract function setFamily($family);


    public abstract function getFood():string;


    public abstract function setFood($food);


}
class Lion extends Animal
{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }

    public  function getFamily():string
    {
        return $this->family;
    }
    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function getFood():string
    {
        return $this->food;
    }


    public function setFood($food)
    {
        $this->food = $food;
    }
}
class Cow extends Animal
{
    public $owner;
    public function __construct($family, $food,$owner)
    {
        parent::__construct($family, $food);
        $this->owner=$owner;
    }

    public function getOwner():string
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    public  function getFamily():string
    {
        return $this->family;
    }


    public function getFood():string
    {
        return $this->food;
    }
    public function setFamily($family)
    {
        $this->family=$family;
    }


    public function setFood($food)
    {
        $this->food = $food;
    }

}
$lion=new Lion("Habitat","meat");

echo $lion->getFamily()."<br>";
echo $lion->getFood()."<br>";
$cow=new Cow("cow","herb","ahmed");
echo $cow->getOwner()."<br>";
