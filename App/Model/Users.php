<?php
    namespace App\Model;
    use App\utils\BddConnect;
    // use\App\model\roles;

    class Users extends Bddconnect
    {
        private ?int $id_users;
        private ?string $nom_users;
        private ?string $prenom_users;
        private ?string $mail_users;
        private ?string $mdp_users;


                /*-----------------------
                Constructeur
        ------------------------*/
        public function __construct(){
        
        }
        public function getIdUsers():?int{
            return $this->id_users;
        }
        public function getNomUsers():?string{
            return $this->nom_users;
        }
        public function getPrenomUsers():?string{
            return $this->prenom_users;
        }
        public function getMailUsers():?string{
            return $this->mail_users;
        }
        public function getMdpUsers():?string{
            return $this->mdp_users;
        }
        public function setIdUsers(?int $id):void{
            $this->id_users = $id;
        }
        public function setNomUsers(?string $name):void{
            $this->nom_users = $name;
        }
        public function setPrenomUsers(?string $firstName):void{
            $this->prenom_users = $firstName;
        }
        public function setMailUsers(?string $mail):void{
            $this->mail_users = $mail;
        }
        public function setMdpUsers(?string $pwd):void{
            $this->mdp_users = $pwd;
        }

                /*-----------------------
                Méthodes
        ------------------------*/
        //méthode pour ajouter un utilisateur en BDD
        public function addUsers():void{
            try {
                //récupérer les données
                $nom = $this->nom_users;
                $prenom = $this->prenom_users;
                $mail = $this->mail_users;
                $password = $this->mdp_users;

                //préparer la requête
                $req = $this->connexion()->prepare('INSERT INTO users(nom_users, 
                prenom_users, mail_users, 
                mdp_users) VALUES(?,?,?,?)');
                //bind les paramètres
                $req->bindParam(1, $nom, \PDO::PARAM_STR);
                $req->bindParam(2, $prenom, \PDO::PARAM_STR);
                $req->bindParam(3, $mail, \PDO::PARAM_STR);
                $req->bindParam(4, $password, \PDO::PARAM_STR);
                //Exécuter la requête
                $req->execute();

            } 
            catch (\Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
        }
        public function getUserByMail():?array{
            //exécution de la requête
            try {
                //récupération du mail
                $mail = $this->mail_users;
                //préparation de la requête
                $req = $this->connexion()->prepare('SELECT id_users, nom_users, prenom_users,
                mail_users, mdp_users
                FROM users WHERE mail_users = ?');

                $req->bindParam(1, $mail, \PDO::PARAM_STR);

                $req->execute();
                //récupération
                $data = $req->fetchAll(\PDO::FETCH_OBJ);

                return $data;

            }
            //gestion des erreurs (Exception)
            catch (\Exception $e){
                //affichage de l'erreur
                die('Erreur : '.$e->getMessage());
            }
        }

    }
    
    
?>