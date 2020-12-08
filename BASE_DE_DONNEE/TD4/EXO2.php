<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            include "Fonction.php";
        ?>

        <!-- formulaire -->
        <form action="" method="get">
            <div>
                <label>
                <input type=text style="width: 401px; height: 31px;" id="marequete" name="marequete">
            </div>
            <div>
                <input type="submit" value="Entrez votre requete SQL" name="submit">
            </div>
        </form>


        <?php
            //fonction requete
            if(isset($_GET['submit']))
            {
                afficher_requet_select($_GET['marequete']); //recupere valeur obtenu dans tabl
            }
        ?>
</body>
</html>