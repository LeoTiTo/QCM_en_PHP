<?php
    //démarrer la session
    session_start();
    //verifier l'envoie du formulaire
    if(isset($_POST['button'])){
        //vérifier que le champs nom n'est pas vide
        if(isset($_POST['name']) && $_POST['name']!=""){
            //créer une variable session qui vas comporté le pseudo
            $_SESSION['name'] = $_POST['name'];
            //redirection vers la page qcm
            header('location:QCM.php?');
        }else{
            //si le champs est vide
            $error = "veuillez choisir un pseudo !";
        }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pseudo Page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "menu.php" ?>

    <section class="pseudo">
        <form action="index.php" method="POST">
            <p class="error">
                <?php
                    //afficher l'erreur si elle existe
                    if(isset($error)){echo $error;}
                ?>
            </p>
            <label>Entrez votre pseudo</label>
            <!---METTTONS LE PSEUDO DANS L'INPUT SI LA VARIABLE SESSION PSEUDO EXISTE--->

            <input type="text" name="name" placeholder="Ex: LocTiTo" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>">
            <button class="style_btn" name="button" >Soumettre</button>
        </form>
    </section>
</body>
</html>