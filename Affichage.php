<?php

$connexion = new mysqli("localhost","root","","etudiantdb");
$sql = "SELECT * FROM etudiant";
$resultat = $connexion->query($sql);

echo'

<html>

<head>
    <title> Liste des étudiants Inscrit </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">  
</head>

<body>
    <script>
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cette ligne?")) {
                window.location.href = "traitement.php?id=" + id;
            }
        }
    </script>
    <div>
       <span>
         <a href="Acceuil.html">
           <img id="imgback" src="images/precedante.png" alt="Retour" />
         </a>
       </span>

        <img id="Droiteimg" src="images/ListerEtud.png" alt="Lister"/>
        <h1>  Liste des étudiants inscrits </h1>
    </div>
<div class="container">
    
        <table>
         <tr>
           <th> Images </th>
           <th> Nom </th>
           <th> Prénom </th>
           <th> Date de naissance </th>
           <th> Adresse </th>
           <th> Filière </th>
           <th colspan="2" style="text-align: center;"> Opérations </th>
        </tr>';

while($row=$resultat->fetch_assoc()) {
    echo '
        <tr>
           <td> 
           <img style="padding:0px;
                       width: 60px;
                       height: 60px;
                       border-radius: 50%;
                       objet-fit: cover;
                       border : 1px solid #000;
                       text-align: center;"
                src="'.$row["Image"].'" />
            </td>     
            <td class="tdcent">'.$row["Nom"].'</td>
            <td class="tdcent">'.$row["Prenom"].'</td>
            <td class="tdcent">'.$row["DateNaissance"].'</td>
            <td class="tdcent">'.$row["Adresse"].'</td>
            <td class="tdcent">'.$row["Filiere"].'</td>
            <td class="tdcent">    
                <a href="#" onclick="confirmDelete('.$row["ID"].')">
                   <img id="icon" src="images/supp.jpg"/> 
                </a>  
            </td>

            <td class="tdcent">   
               <a href="ModifierEtudiant.php?id='.$row["ID"].'" style="margin-left: 10px;"> 
                   <img id="icon" src="images/modif.png"/> 
               </a>
            </td>
        </tr> 
        ';
        }

echo'
        </table>
    </div>
    
</body>
</html>
';
?>