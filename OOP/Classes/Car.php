<?php

class Car {
     
   private  $brand = "Volvo";
   private $color = "Green";
    private $type = "car";

    public function __construct($brand, $color =  "none"){

         $this->brand = $brand;
         $this->color = $color;

    }

    
       public function getBrand(){
        return $this->brand;
    }

    public function getColor(){
        return $this->color;
    }

   

 
    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function setColor($color){
        $this->color = $color;
    }

  


    public function getcarInfo(){

       return "brand: " . $this->brand. " , color : " . $this->color;
    }




}
