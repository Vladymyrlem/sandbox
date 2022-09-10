<?php

class RgbClass
{
    private $red;
    private $green;
    private $blue;

    public function __construct($color1 = 220,$color2 = 233,$color3 = 13)
    {
        $this->setRed($color1);
        $this->setGreen($color2);
        $this->setBlue($color3);
    }

    public function getRed(){
        return $this->red;
    }
    public function getBlue(){
        return $this->blue;
    }
    public function getGreen(){
   // $this->green = $green;
    return $this->green;
    }

    private function setRed(int $color){
        $this->red = $color;
        if($color > 255){
            echo '<h1>Введіть значення меньше 255</h1>';
        } else{
            return $color;
        }
    }
    private function setGreen(int $color){
        $this->green = $color;
        if($color > 255){
            echo '<h1>Введіть значення меньше 255</h1>';
        } else{
            return $color;
        }
    }
    private function setBlue(int $color){
        $this->blue = $color;
        if($color > 255){
            echo '<h1>Введіть значення меньше 255</h1>';
        } else{
            return $color;
        }
    }
    public function equals(){
        if($this->red == $this->blue){
           return 'true';
        }else{
            return 'false';
        }
    }
    public static function random(RgbClass $rand_red,RgbClass $rand_green,RgbClass $rand_blue){
    $rand_color = rand(0,255);

    }
    public function mix(RgbClass $rand_color){
    $result =  new RgbClass($this->red + $rand_color->getRed(),$this->red + $rand_color->getBlue(),$this->green + $rand_color->getGreen());
    return $result;
    }
}

