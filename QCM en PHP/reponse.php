<?php
    //démqrrer la session
    session_start();
    //verifier si les variables session name et niveau existe
    if(!isset($_SESSION['name'])){
        header('location:index.php'); //Si le pseudo n'existe pas redirection vers indexphp ou bien loginpage
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résultat QCM</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "menu.php" ?>

  <section class="resultats">
    <h1>Résultat du QCM de <span class="change_color"> <?=$_SESSION['name'] ?> </span>
    </h1>

      <?php
        include "connect.php";
        $note = 0;
        foreach ($_POST as $cle => $val) {
            //$clé représente idq(identifiant de la question) et $val représente idr(l'identifiant de sa reponse)

            $req = "SELECT * FROM reponses WHERE idr = $val AND verite=1";
            //execution
            $res = mysqli_query($id,$req);
            if(mysqli_num_rows($res)>0){
                //si cette requette retourne un nombre de ligne > 0 on ajoute 4 à la note
                $note = $note + 4;
            }else{
                ?>
                    <p class="color">Tu t'es planté à la question <?=$cle?> : </p>
                <?php

                //liste des question qui ont été mal répondues
                $req2 = "SELECT * FROM questions WHERE idr = $cle";
                $res2 = mysqli_query($id,$req2);
                $ligne = mysqli_fetch_assoc($res2);
                ?>
                    <p class="question_error">
                        <?=$ligne['libelleQ']?>
                    </p>
                    <p class="color">Il fallait répondre</p>
                        <?php
                            $req3 = "SELECT * FROM questions WHERE idr = $cle";
                            //liste vrais réponses
                            $req3 = "SELECT * FROM reponses WHERE idq = $cle AND verite=1";
                            $res3 = mysqli_query($id,$req3);
                            $ligne3 = mysqli_fetch_assoc($res3);
                        ?>

                        <p class="reponse_vrai"> <?=$ligne3['libeller']?> </p>
                <?php
            }
        }
      ?>

        <?php
            //changer la couleur de la note

            if($note < 10){
                echo "<style> .note_value{ color: red; } </style>";
            }else if($note == 10){
                echo "<style> .note_value{ color: orange; } </style>";
            }else {
                echo "<style> .note_value{ color: green; } </style>";
            }
        ?>
      <p class="note"> Tu as eu <span class="note_value"> <?=$note?>/20 </span></p>
  </section>
</body>
</html>