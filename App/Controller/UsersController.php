<?php
    namespace App\Controller;

    use App\model\Users;
    use App\Utils\Fonctions;
    class UsersController extends Users
    {
        public function insertUsers() {
            $msg = "";
        
    
            if(isset($_POST['submit'])) {
                // Récupération et nettoyage des inputs utilisateurs
                $nom = Fonctions::cleanInput($_POST['nom_users']);
                $prenom = Fonctions::cleanInput($_POST['prenom_users']);
                $mail = Fonctions::cleanInput($_POST['mail_users']);
                $pwd = Fonctions::cleanInput($_POST['mdp_users']);
        
                // Vérification si les champs sont remplis
                if(!empty($nom) && !empty($prenom) && !empty($mail) && !empty($pwd)) {

                    $this->setMailUsers($mail);
                    if($this->getUserByMail()){

                        $msg = "Veuillez remplir tous les champs du formulaire";
                        $users = new Users();
                        $password = password_hash($pwd, PASSWORD_DEFAULT);
                    
            
                        // Ajout du compte en BDD
                        $users->addUsers();

                        var_dump($nom);
                        }else{
                            $msg = "Les informations sont incorrectes";
                        }
                    
            } else {
                $msg = "Veuillez remplir tous les champs du formulaire";
            }

        }
                
            // Importer la vue
            include './App/Vue/viewAddUsers.php';
        // public function connexionUser(){
        //     //variable pour stocker les messages d'erreurs
        //     $msg = "";
        //     //Tester si le formulaire est submit
        //     if(isset($_POST['submit'])){
        //         //Nettoyer les inputs utilisateur
        //         $mail = Fonctions::cleanInput($_POST['mail_users']); 
        //         $password = Fonctions::cleanInput($_POST['mdp_users']);
        //         //Tester si les champs sont remplis
        //         if(!empty($mail) AND !empty($password)){
        //             //Setter les valeurs à l'objet
        //             $this->setMailUsers($mail);
        //             $this->setMdpUsers($password);
        //             //Stokage du compte si il existe
        //             $data = $this->getUserByMail();
        //             //Tester si le compte existe
        //             if($data){
        //                 //Test si le mot de passe est valide
        //                 if(password_verify($password, $data[0]->password_utilisateur)){
        //                     //Créer les super globales de Session
        //                     $_SESSION['connected'] = true;
        //                     $_SESSION['nom'] = $data[0]->nom_users;
        //                     $_SESSION['prenom'] = $data[0]->prenom_users;
        //                     $_SESSION['mail'] = $data[0]->mail_users;
        //                     $_SESSION['id'] = $data[0]->id_utilisateur;
        //                     header('Location: ./');
        //                 }
        //                 //Test si le mot de passe est incorrect
        //                 else{
        //                     $msg = "Les informations de connexion sont invalides";
        //                     echo '<script>
        //                         setTimeout(()=>{
        //                             modal.style.display = "block";
        //                         }, 500);
        //                     </script>';
        //                 }
        //             }
        //             //Test si le compte n'existe pas
        //             else{
        //                 $msg = "Les informations de connexion sont invalides";
        //                 echo '<script>
        //                     setTimeout(()=>{
        //                         modal.style.display = "block";
        //                     }, 500);
        //                 </script>';
        //             }
        //         }
        //         //Test les champs sont vides
        //         else{
        //             $msg = "Veuillez remplir tous les champs de formulaire";
        //             echo '<script>
        //                 setTimeout(()=>{
        //                     modal.style.display = "block";
        //                 }, 500);
        //             </script>';
        //         } 
        //     }
        //     //import de la vue connexion
        //     include './App/Vue/ViewConnexion.php';
        // }
        

}
 }