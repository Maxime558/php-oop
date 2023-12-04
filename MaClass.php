<?php

class Maclass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = 51;
    private $_attributPrivate;
    private $_nom = "Michel PLIK";
}

$obj = new Maclass();

echo 'Couleur : ' . $obj->couleur . '<br>';
echo 'Age : ' . $obj->age . '<br>';
// echo 'Nom : ' . $obj->_nom . '<br>';