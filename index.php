<?php
    //deamarrage de la session
    // session_start();
    //chemin de direction vers la Bdd et les fonctions

    use App\Controller\UsersController;
    use App\model\Users;

    include './App/Utils/Fonctions.php';
    include './App/Utils/Bddconnect.php';
    include './App/Model/Users.php';
    include './App/Controller/UsersController.php';





    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    $userController = new UsersController();


    switch ($path) {
        case '/projetFilRouge/':
            include './App/Vue/home.php';  // nous renvoie vers la page acceuil 
            break;
        case '/projetFilRouge/UsersAdd':
            $userController->insertUsers(); // nous envoie vers la page demandé si elle existe
            break;
        // case '/projetFilRouge/usersAdd':
        //     $rolesController->insertRoles();
        //     break;
        // case '/projetFilRouge/connexion':
        //     $userController->ConnexionUser();
        //     break;
        // case '/chocoblast/chocoAdd':
        //      $chocoblastController->insertChoco();
        //      break;
        // case '/chocoblast/commentaireAdd':
        //     $commentaireController->insertCommentaire();
        //     break;
        default:
            include './App/Vue/error.php'; // nous envoi sur une page d'erreur si la page n'existe pas
            break;
        }
    // else{
    //     switch ($path) {
            // case '/projetFilRouge/':
            //     include './App/Vue/home.php';
            //     break;
            // case '/projetFilRouge/usersAdd':
            //     $UsersController->insertUsers();
            //     break;
            // case '/projetFilRouge/connexion':
            //     $userController->connexionUser();
            //     break;
            // default:
            //     include './App/Vue/error.php';
            //     break;


?>