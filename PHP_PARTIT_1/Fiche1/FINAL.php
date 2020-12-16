<html>
    <head>
    <link rel="stylesheet" href="../../../Menu.css">
    </head>
    <body>
        <?php
                    include ("../../Menu.php");
                    
        session_start();


            {

            echo '<form action="FINAL.php"
                method="POST"           
                name="login">
            <label for="texte"> Inserez votre login : </label>
            <input type="texte" name="login">';

            echo '<form action="FINAL.php"
                method="POST"               
                name="MDP">
            <label for="texte"> Inserez votre mot de passe : </label>
            <input type="texte" name="MDP">';

           echo '<button name="valider"
                type="submit"
                value="OK"
                action="FINAL.php">
                validez vos identifiant
                </button>';
            }

            if(!isset($_POST['login']) == "1234" and ($_POST['MDP']) != "Julien")

            {
        
                echo '<form action="FINAL.php"
                    method="POST"           
                    name="login">
                <label for="texte"> Login Correct : </label>
                <input type="texte" name="login">';
    
                echo '<form action="FINAL.php"
                    method="POST"               
                    name="MDP">
                <label for="texte"> Mauvais mot de passe, veullez réessayer : </label>
                <input type="texte" name="MDP">';
    
                echo '<button name="valider"
                    type="submit"
                    value="OK"
                    action="unset($_SESSION[Login]>
                    validez vos identifiant
                </button>';
            }

            
            elseif(!isset($_POST['login']) != "1234" and ($_POST['MDP']) == "Julien")

            {
        
                echo '<form action="FINAL.php"
                    method="POST"           
                    name="login">
                <label for="texte"> Login inorrect, veuillez réessayer : </label>
                <input type="texte" name="login">';
    
                echo '<form action="FINAL.php"
                    method="POST"               
                    name="MDP">
                <label for="texte"> Mot de passe Valide : </label>
                <input type="texte" name="MDP">';
    
                echo '<button name="valider"
                    type="submit"
                    value="OK">
                    validez vos identifiant
                </button>';
            }

            elseif(!isset($_POST['login']) == "1234" and ($_POST['MDP']) == "Julien")

            {
        
                echo 'Bienvenue';

                echo '<button name="valider"
                type="submit"
                value="OK">
                validez vos identifiant
                </button>';


            }
        ?>


        <li> <a href="index.html"> Retour à la page index </a> </li>

    </body>
</html>