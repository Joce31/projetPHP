<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/Styles/styles.css">
    <title>Ajouter un Utilisateur</title>
</head>
<body>
    <main>
        <article>
            <!--import du menu -->
            <?php include './App/Vue/viewMenu.php';?>

            <h3>Ajouter un compte utilisateur :</h3>
        <div class="form1">


                <form action="" method="post">
                    Inscription
                    <input type="checkbox" id="maCheckbox" name="maCheckbox" value="1">
                    <label for="maCheckbox">Auto-entrepreneurs</label>
                    <label for="nom_users">Nom : </label>
                    <input type="text" name="nom_users" placeholder="Nom" required>
                    <label for="prenom_users">Prenom : </label>
                    <input type="text" name="prenom_users" placeholder="Prenom" required>
                    <label for="mail_users">Saisir votre E-mail :</label>
                    <input type="mail" name="mail_users" placeholder="Mail" required>
                    <label for="mdp_users">Saisir votre Password</label>
                    <input type="password" name="mdp_users" placeholder="Mot de passe" required>
                    <input type="submit" value="valider" name="submit">
                    
                </form>

        </div>
        </article>
    </main>
        
</body>
</html>