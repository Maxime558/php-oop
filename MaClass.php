<?php

class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 51;
    public string $nom;
    public string $prenom;
    public const PI = 3.14;
    public float | int $rayon;
    static string $varstatic = 'Je suis une variable statique';

    /*   public function __construct()
    {
        echo 'Je suis une méthode magique (__construct) de la classe : ' . __CLASS__ . ' <br>';
    } */

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function affichePersonne()
    {
        echo 'Nom : ' . $this->nom . ', Prénom : ' . $this->prenom . '<br>';
    }

    public function __destruct()
    {
        echo 'Je suis une méthode magique (__destruct) de la classe : ' . __CLASS__ . ' <br>';
    }

    public function displayMethode()
    {
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ';
    }

    public function calculAire($rayon): float | int
    {
        return self::PI * $rayon * $rayon;
    }

    public function calculAire2($rayonParam): float | int
    {
        return self::PI * $rayonParam * $rayonParam;
    }

    static function staticFunc()
    {
        return "Méthode statique qui affiche une variable statique" . ' : ' . self::$varstatic . '<br>';
    }
}


$obj = new MaClass('Carroll', 'Linda');
$obj->prenom = 'Michel';

echo $obj->displayMethode('couleur') . '<br>';

$rayonParam = 5;
$rayon = 4;
echo 'L\'aire du cercle de rayon ' . $rayon . ' est : ' . $obj->calculAire($rayon) . '<br>';

$rayonParam = 3;
echo 'L\'aire du cercle de rayon ' . $rayonParam . ' est : ' . $obj->calculAire2($rayonParam) . '<br>';

$obj->affichePersonne();

echo MaClass::staticFunc();