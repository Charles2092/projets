<?php
//Marcelin Charles

//La connexion avec la base de donnés
try {
    $db = new PDO('mysql:host=127.0.0.1:3306;dbname=exercice', 'root', '');
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}


class ModeleVoiture
{
    private $_id;
    private $_nom;
    private $_carrosserie;
    private $_volumecoffre;
    private $_nombreportes;




    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = "set" . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }


    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }


    public function setCarrosserie($carrosserie)
    {
        $this->_carrosserie = $carrosserie;
    }

    public function getCarrosserie()
    {
        return $this->_carrosserie;
    }


    public function setNombreportes($nombreportes)
    {
        $this->_nombreportes = $nombreportes;
    }

    public function getNombreportes()
    {
        return $this->_nombreportes;
    }

    public function setVolumecoffre($volumecoffre)
    {
        $this->_volumecoffre = $volumecoffre;
    }

    public function getVolumecoffre()
    {
        return $this->_volumecoffre;
    }
}

class AvionManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDB($db);
    }

    public function setDB(PDO $db)
    {
        $this->_db = $db;
    }

    public function add(ModeleVoiture $voiture)
    {
        try {
            $req = $this->_db->prepare('INSERT INTO AVION (NomAvion, CountryAvion, YearAvion,) VALUES (:mNom :mCountry, :mYear,);');
            $req->bindValue(':mNom', $voiture->getName());
            $req->bindValue(':mCountry', $voiture->getCountry());
            $req->bindValue(':mYear', $voiture->getYear())
            return "L'ajout à donc été fait";
        } catch (PDOException $e) {
            return "Il y a eu une erreur: " . $e->getMessage();
        }

    }

    //  function DELETE
    public function delete(ModeleVoiture $voiture)
    {
        try {
            $this->_db->query('DELETE FROM AVION WHERE NomAvion = "' . $voiture->getName() . '"');
            return 'La suppression à donc été faite';
        } catch (PDOException $e) {
            return "Il y a eu une erreur: " . $e->getMessage();
        }

    }

    //fonction UPDATE
    public function update(ModeleVoiture $voiture)
    {
        try {
            $req = $this->_db->prepare('UPDATE AVION SET CountryAvion = "' . $voiture->getCountry() . '", YearAvion = "' . $voiture->getYear() '" WHERE NomAvion = "' . $voiture->getNom() .'"'.);
            $req->execute();
            return "La modification à été faite";
        } catch (PDOException $e) {
            return "Il y a eu une erreur: " . $e->getMessage();
        }
    }
}

?>