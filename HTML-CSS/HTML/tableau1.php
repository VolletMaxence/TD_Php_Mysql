<html>
    <thead>
        <style>
            table, th, td {
                padding:10px;
                border:1px solid black;
                border-collapse: collapse;
            }
        </style>
        <link rel="stylesheet" href="../../../Menu.css">
    </thead>
    <tbody>
        <?php
        include ("../../Menu.php");
        ?>
        <p align=left> Liste des matières </p>
        <table>
            <tr> 
                <td> </td>
                <td> <b>1er semestre </b> </td>
                <td> <b>2e semestre </b> </td>
            </tr>
            <tr>
                <td rowspan="3"> SIO1 </td>
                <td>SI1, SI2, SI3, SI4</td>
                <td>SI5, SI6</td>

            <tr>
                <td>SLAM,</td>
                <td>SISR</td>
            </tr>
            <tr>
                <td>SLAM1, SLAM2</td>
                <td>SISR1, SISR2</td>
            </tr>
            <!-- 2e ligne tableau-->
            <tr>
                <td rowspan="3"> SIO2 </td>
                <td colspan="2">SI7</td>
            <tr>
                <td>SLAM,</td>
                <td>SISR</td>
            </tr>
            <tr>
                <td>SLAM3, SLAM4, SLAM5</td>
                <td>SISR3, SISR4, SISR5</td>
            </tr>
        </table>
        <h1>
            <li> <a href="index.html"> Retour à la page index </a> </li>
        </h1>

                <!--Boutton retour page-->
                <a href="../page_liste_d'exo.html">
                    Retour à la liste des exo
                </a>
    </tbody>
</html>