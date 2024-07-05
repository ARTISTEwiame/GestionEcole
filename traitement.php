<?php

 $connexion = new mysqli("localhost", "root", "", "etudiantdb");

 // Vérification de la connexion
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
}

 // CODE POUR AJOUTER UN ETUDIANT AU PAGE : AjouterEtudiant

 if(isset($_POST['nom']) && isset($_POST['prenom']) && !isset($_POST['id'])) {
    
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $datenaissance = $_POST['datenais'];
 $adresse = $_POST['adr'];
 $filiere = $_POST['fil'];

 // Traitement de l'image
 $imagePath = 'images/'.basename($_FILES["img"]["name"]);    
 move_uploaded_file($_FILES["img"]["tmp_name"],$imagePath);

 $connexion = new mysqli("localhost","root","","etudiantdb");
 // Requête préparée pour l'insertion
 $sql = "INSERT INTO etudiant (Nom,Prenom,DateNaissance,Adresse,Filiere,Image) 
 VALUES ('".$nom."','".$prenom."','".$datenaissance."','".$adresse."','".$filiere."','".$imagePath."')";
 $connexion->query($sql);


sleep(4);
header('Location: Acceuil.html');
exit;

}

// CODE POUR SUPPRIMER UNE LIGNE AU SEIN DE AFFICHAGE DES DONNES

if(isset($_GET['id'])){

    $id = $_POST['id'];
    $connexion = new mysqli("localhost","root","","etudiantdb");
    $sql = "DELETE FROM etudiant WHERE ID=".$_GET["id"];
    $connexion->query($sql);

    sleep(3);
    header('Location: Affichage.php');
    exit;
}

// CODE POUR MODIFIER LES INFORMATION D'UN ETUDIANT

if(isset($_POST['id'])) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datenaissance = $_POST['datenais'];
    $adresse = $_POST['adr'];
    $filiere = $_POST['fil'];

    $connexion = new mysqli("localhost","root","","etudiantdb");

 if (!empty($_FILES["img"]["name"])) {

    $imagePath = 'images/'.basename($_FILES["img"]["name"]);    
    move_uploaded_file($_FILES["img"]["tmp_name"], $imagePath);

    $sql = "UPDATE etudiant SET Nom='$nom', Prenom='$prenom', DateNaissance='$datenaissance', Adresse='$adresse', Filiere='$filiere', Image='$imagePath' WHERE ID=$id";
    } else {
        
        $sql = "UPDATE etudiant SET Nom='$nom', Prenom='$prenom', DateNaissance='$datenaissance', Adresse='$adresse', Filiere='$filiere' WHERE ID=$id";
    }

    $connexion->query($sql);

    sleep(2);
    header('Location: Affichage.php');
    exit;
}

?>