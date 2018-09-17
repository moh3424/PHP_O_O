<?php

namespace Repository;

use PDO;
use Manager\PDOManager;

class EntityRepository
{

    private $db; // Contiendra notre objet PDO
    public function __construct(){
        $this -> db = PDOManager::getInstance()-> getPdo();
        // Cette ligne permet de stocker la connexion à la BDD dans $bd, directement à l'instanciation.
    }

    public function getDb(){
        return $this-> db; // cette fonction retourne l'objet stocké dans $db
    }

    public function getTableName(){
        //get_called_class(): retourne le nom de la classe dans laquelle nous sommes.
       
        //Repository\ProduitRepository
        $table = str_replace(array('Repository\\','Repository') ,'', get_called_class() );
        // On a transformé ça : Repository\ProduitRepository
        //En ça : Produit

        return $table;
        // return 'Produit';
        // Au moment où cette fonction sera exécutée, nous serons dans ProduitRepository, MembreRepository, ou CommandeRepository....
        // Donc cette fonction est capable de récupérer le nom de table que ces entité souhaitent interroger. 

    }

    //-----------------------
    //----------------------

    //-------------REQUETES GENERIQUES:

        // récupérer toutes les infos d'une table :
        public function findAll(){
            $requete = "SELECT * FROM " . $this -> getTableName();// $requete = "SELECT * FROM produit"

            $resultat = $this -> getDb() ->query($requete); // $resultat = $pdo -> query($requete);

            $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this ->getTableName());
            // setFetchMode(), en mode FETCH_CLASS permet d'instancier un objet en prenant les résultats de la requête, et en les affectant aux propriétés de l'objet. Pour que cela fonctionne il faut absolument que les champs dans la BDD soient identiques aux propriétés des la class.
           
            $data = $resultat -> fetchAll();

            if(!$data){
                return false;
            }else{
                return $data;
            }

        }

        // récupérer un enregistrement par sont ID :
        public function find($id){
            $requete = "SELECT * FROM " . $this -> getTableName() . " WHERE id_" . $this->getTableName() . " =:id"  ;
            $resultat = $this -> getDb() ->prepare($requete); 
            $resultat -> bindParam(':id', $id, PDO::PARAM_INT);
            $resultat -> execute();

            $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this -> getTableName());

            $data = $resultat -> fetch();

            if(!$data){
                return false;
            }else{
                return $data;
            }

        }

        // Supprimer une entrée
        public function delete($id){
            $requete =  "DELETE FROM " .$this->getTableName() ." WHERE id_" . $this -> getTableName() ." =:id";
            $resultat = $this -> getDb() ->prepare($requete); 
            $resultat -> bindParam(':id', $id, PDO::PARAM_INT);
            return $resultat -> execute();

        }

      
        //Méthode générique pour modifier un enregistrement avec la requete UPDATE
            public function update($id, $infos){
                $newValues = '';
                $first = FALSE; 
                foreach($infos as $key => $value){
                    if($first == FALSE){
                        $newValues .= " $key = :$key ";
                        $first = TRUE;
                    }
                    else{
                        $newValues .= ", $key = :$key ";
                    }
                }
        
                $requete = "UPDATE " . $this -> getTableName() ." set " . $newValues . " WHERE id_". $this -> getTableName() . "=:id";
                
                
                //echo $requete; 
                $resultat = $this -> getDb() -> prepare($requete);
                $infos['id'] = $id;
                // la ligne ci-dessous est pour ajouter notre id passé en parametre dans l'array de la méthode execute(); 
                 return $resultat -> execute($infos);
            }
            
            //Méthode générique pour ajouter un enregistrement
            public function register($infos){	
                $requete = 'INSERT INTO ' . $this -> getTableName() . ' (' . implode(', ', array_keys($infos)) . ') VALUES (' . ":" . implode(", :", array_keys($infos)) . ')';
                
                //echo $requete; 
                
                $resultat = $this -> getDb() -> prepare($requete);
                
                if($resultat -> execute($infos)){
                    return $this -> getDb() -> lastInsertId();
                }
                else{
                    return false;
                }
            }
}