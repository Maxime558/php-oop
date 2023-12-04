<?php 

class MaClassHerite extends MaClass
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    public function getCouler()
    {
        return $this->couleur;
    }

    public function getVariableProtected()
    {
        return $this->varProtected;
    }
}