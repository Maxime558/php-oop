<?php

class MaClass
{

    public function __construct()
    {
        echo 'Je suis une méthode magique ( __construct ) de la classe : ' . __CLASS__ . ' <br>';
    }

    public function __destruct()
    {
        echo 'Je suis une méthode magique ( __destruct ) de la classe : ' . __CLASS__ . ' <br>';
    }

    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 51;
    public string $prenom;
    public const PI = 3.14;
    public float | int $rayon;

    static string $varstatic = 'Je suis une variable statique';

    protected string $varProtected = "Je suis une variable protected" . '<br>';

    private string $_atributePrivate;
    
    private string $_nom = 'Michel' . '<br>';

    public function displayMethode()
    {
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' ;
    }

    public function calculAire($rayon) : float | int
    {
        return self::PI * $rayon * $rayon;
    }

    public function calculAire2($rayonParam) : float | int
    {
        return self::PI * $rayonParam * $rayonParam;
    }

    static function staticFunc()
    {
        return "Méthode statique qui affiche une variable statique" . ' : ' . self::$varstatic . '<br>';
    }

    public function getnom()
    {
        return $this->_nom;
    }

    public function setnom($nom)
    {
        $this->_nom = $nom;
    }
}

?>
