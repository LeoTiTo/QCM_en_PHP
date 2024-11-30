<?php
    session_start();
    //si la variable session name n'existe pas, on fait un redirection vers  la page index.php
    //ici avec la page logio on peut faire une rediction vers cette page
    if (!isset($_SESSION['name'])) {
        header('Location: index.php');
    }

    //verifier le formulaire
    if(isset($_POST['button'])) {
        //verifions si le niveau a été choisi d'abord
       if (isset($_POST['niveau'])) {
           //enregistrer le niveau dans une variable session
           $_SESSION['niveau'] = $_POST['niveau'];
           //redirection vers la page qcm
           header('Location: QCM.php');
       }else {
           $error = "Veuillez choisir un niveau";
       }
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Niveau Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "menu.php" ?>

  <section class="niveau">
    <h4>Bonjour
      <span class="change_color"> <?=$_SESSION['name']?> </span>,
       choisissez d'abord le niveau des questions :
    </h4>

    <form action="niveau.php" method="POST">
      <p>Votre niveau actuel est :
        <span class="change_color">
          <?php
            //afficher le niveau actuel
            if (isset($_SESSION['niveau'])) {
                //si la variable session['niveau'] existe
                //si le niveau est égale à 1
                if($_SESSION['niveau'] == 1 ) {
                    echo "Confirmé";
                }else{
                    echo "Débutant";
                }

            }else {
                echo "Aucun";
            }
          ?>
        </span>
      </p>

        <p class="error">
            <?php if(isset($error)){echo $error;}?>
        </p>

      <div class="choices">
        <div class="choice">
          <input type="radio" name="niveau" value="0">Débutant
        </div>

        <div class="choice">
          <input type="radio" name="niveau" value="1">Confirmé
        </div>

        <button name="button" class="style_btn">Soumettre</button>
      </div>
    </form>
  </section>
</body>
</html>