<?php



namespace App\Module; // DECLARE NAMESPACE

class Voiture
{
    private $color;
    private $model;

    public function __construct($color,$model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model)
    {
        $this->model = $model;
    }




}






















































//
//namespace app\module;
//
//class Voiture
//{
//    private $color;
//
//    public function __construct($color)
//    {
//        $this->color = $color;
//    }
//
//    public function getColor()
//    {
//        return $this->color;
//    }
//
//    public function setColor($color)
//    {
//        $this->color = $color;
//    }
//
//}