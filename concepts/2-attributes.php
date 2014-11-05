<?php
class Typewriter{
    public $model;
    public $build;
    private $owner;

    public function __construct($owner){
        $this->owner = $owner;

    }

    public function introduce(){
        echo "Hi, I'm a typewriter and my name is {$this->model}. I was built in {$this->build} and owned by {$this->owner}\n";
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getOwner()
    {
        return $this->owner;
    }


    public function getBuild()
    {
        return $this->build;
    }


    public function setBuild($build)
    {
        $this->build = $build;
    }

}


$tw1 = new Typewriter("Mr. Awesome TypingHand");
$tw2 = new Typewriter("Mr. Slowpress");

$tw1->setModel("Remington");
$tw1->setBuild("1868");

$tw2->model = "Underwood";
$tw2->build = "1920";

$tw1->introduce();
$tw2->introduce();
?>