<?php
    //démqrrer la session
    session_start();
    //verifier si les variables session name et niveau existe
    if(!isset($_SESSION['name'])){
        header('location:index.php'); //Si le pseudo n'existe pas redirection vers indexphp ou bien loginpage
    }

    if (!isset($_SESSION['niveau'])) {
        header('location:niveau.php');
    }

    $niveau = $_SESSION['niveau'];

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QCM Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include "menu.php";
        include "connect.php";
    ?>

  <section class="qcm">
    <form action="reponse.php" method="POST">
        <?php
            //liste des auestion et des réponses
            $req = "SELECT * FROM questions  WHERE niveau = $niveau order by RAND() LIMIT 5";
            //execyter la requette
            $res = mysqli_query($id,$req);
            //afficher les questions

                echo "<ol>";
                    while ($ligne = mysqli_fetch_assoc($res)) {
                        $idq = $ligne['idq'];

                        ?>
                        <h3 class="question"><li> <?=$ligne['libelleQ']?> </li></h3>
                        <?php
                            //afficher les réponses associées à ces questions
                                $req2 = "SELECT * FROM reponses WHERE idq = $idq";
                            //Executer la requette
                                $res2 = mysqli_query($id,$req2);
                            //afficher les questions
                                while ($ligne2 = mysqli_fetch_assoc($res2)) {
                                    ?>
                                    <input type="radio" name="<?=$idq?>" value="<?=$ligne2['idr']?>" required> $ligne2['libeller'] <br>
                                    <?php
                                }
                        }
                ?>

      <input type="submit" class="style_btn" value="Envoyer">
    </form>
  </section>
</body>
</html>