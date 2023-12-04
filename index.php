<?php
include 'Maclass.php';
include 'MaClassHerite.php';

/* $obj = new MaClass();
$obj->prenom = 'Michel';

echo $obj->displayMethode('couleur') . '<br>';

$rayonParam = 5;
$rayon = 4;
echo 'L\'aire du cercle de rayon ' . $rayon . ' est : ' . $obj->calculAire($rayon) . '<br>';

$rayonParam = 3;
echo 'L\'aire du cercle de rayon ' . $rayonParam . ' est : ' . $obj->calculAire2($rayonParam) . '<br>';

echo MaClass::staticFunc();
 */

$objetHerite = new MaClassHerite();

// echo $objetHerite->getCouler();

// echo $objetHerite->getVariableProtected();

$objetHerite->setnom('Fabien' . '<br>');

echo $objetHerite->getnom();