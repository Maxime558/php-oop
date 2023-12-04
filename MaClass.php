<?php

class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 51;
    public string $prenom;
    public const PI = 3.14;

    public function displayMethode($value)
    {
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' . $value;
    }

    public function calculAire($rayon) : float | int
    {
        return self::PI * $rayon * $rayon;
    }

    public function calculAire2($rayonParam) : float | int
    {
        return self::PI * $rayonParam * $rayonParam;
    }
}

$obj = new MaClass();
$obj->prenom = 'Michel';

echo $obj->displayMethode('couleur') . '<br>';

$rayonParam = 5;
$rayon = 4;
echo 'L\'aire du cercle de rayon ' . $rayon . ' est : ' . $obj->calculAire($rayon) . '<br>';

$rayonParam = 3;
echo 'L\'aire du cercle de rayon ' . $rayonParam . ' est : ' . $obj->calculAire2($rayonParam);
?>
