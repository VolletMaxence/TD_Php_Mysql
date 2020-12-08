<?php
    function  afficher_requet_select($marequete)
    {
        try {
            $bdd = new PDO('mysql:host=192.168.64.116; dbname=Maxence_Consultation; charset=utf8','root','root');
    

            $marequete = $bdd->query($_GET['marequete']);

            $row = $marequete->rowCount();
            $col = $marequete->columnCount();
            $i;
            ?>

            <table>

            <?php
            while($row = $marequete->fetch());
            {
                echo"<tr>";
                for($i = 0; $i < $col; $i++)
                {
                    echo "<td>".$row[$i]."</td>";
                }
                echo "</tr>";
            }
            ?>

            </table>

            <?php
    
            
        }
        catch(Execption$erreur){
            die(`Erreur :`.$erreur->getMessage());
        }
            
    }
?>