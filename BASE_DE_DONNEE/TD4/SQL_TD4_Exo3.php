<html>        
      <head>
      <link rel="stylesheet" href="../../Menu.css">
      </head>  
      <body>  
        <?php
            include ("../../Menu.php");
        
        $afficher_requet_select=new PDO('mysql:host=localhost; dbname=Maxence_Consultation; charset=utf8','root','root');

        try {
            $donnée = $afficher_requet_select->query("SELECT `Medecin`, `Patient` FROM `Consultation`");

            while($tabldonnée = $donnée->fetch())
            {
                echo $tabldonnée["Medecin"]["Patient"];
            }
        } 
        catch(Execption$erreur){
            die(`Erreur:`.$erreur->getMessage());
        }

        ?>
    </body>
</html>