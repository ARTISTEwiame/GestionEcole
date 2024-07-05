<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connexion = new mysqli("localhost", "root", "", "etudiantdb");
    // ici j'ai fait une Vérification de la connexion
    if ($connexion->connect_error) {
        die("Connection failed: " . $connexion->connect_error);
    }

    $sql = "SELECT * FROM etudiant WHERE ID = $id";
    $resultat = $connexion->query($sql);
    $row = $resultat->fetch_assoc();
}
?>

<html>
<head>
    <title> Modification d'étudiant </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<script>
        function previewImage(input) {
            var preview = document.querySelector('#imgPreview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>

    <div>
        <span>
            <a href="Affichage.php">
                <img id="imgback" src="images/precedante.png" alt="Retour"/>
            </a>
        </span>
        <img id="Droiteimg" src="images/Editer.png" alt="Editer" />
        <h1>Formulaire de modification d'un étudiant</h1>
    </div>

    <form name="myForm" method="post" action="traitement.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      <div class="container">
        <div class="FormModifier">

           <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

        <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom" value="<?php echo $row['Nom']; ?>"></td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td><input type="text" name="prenom" value="<?php echo $row['Prenom']; ?>"></td>
            </tr>
            <tr>
                <td>Date Naissance :</td>
                <td><input type="date" name="datenais" value="<?php echo $row['DateNaissance']; ?>"></td>
            </tr>
            <tr>
                <td>Adresse :</td>
                <td><input type="text" name="adr" value="<?php echo $row['Adresse']; ?>"></td>
            </tr>
            <tr>
                <td>Filière :</td>
                <td><input type="text" name="fil" value="<?php echo $row['Filiere']; ?>"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Modifier" /></td>
                <td colspan="2"><input type="reset" value="Annuler" /></td>
            </tr>
        </table>
        </div>

        <div class="FormImage">
                <label for="image">Image:</label>
                <input type="file" name="img" onchange="previewImage(this)" />
                <img id="imgPreview" src="">
        </div>
    </div>
</form>
</body>
</html>