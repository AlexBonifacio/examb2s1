<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forminscriptionstage";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $evenement_et_date = $_POST['evenement_et_date_de_l_evenement'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $niveau = $_POST['niveau'];
        $accord_pay = isset($_POST['accord-pay']) ? 1 : 0;
        $accord_rgpd = isset($_POST['edit-accord-rgpd-custom']) ? 1 : 0;
        // ...autres champs...

        // Préparer et exécuter la requête SQL
        $sql = "INSERT INTO inscriptions (evenement_et_date, prenom, nom, email, telephone, niveau, accord_pay, accord_rgpd) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$evenement_et_date, $prenom, $nom, $email, $telephone, $niveau, $accord_pay, $accord_rgpd]);

        echo "Inscription enregistrée avec succès";
    }
} catch(PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
?>