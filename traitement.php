<?php
// Connexion à la base de données
$servername = "127.0.0.1";
$username = "xfdbkfqt_mds";
$password = "MDSdecouverte74";
$dbname = "xfdbkfqt_mds_stage_decouverte";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $evenement_et_date = $_POST['evenement_et_date_de_l_evenement'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $niveau = $_POST['niveau'];
        $accord_pay = isset($_POST['accord_pay']) ? 1 : 0;
        $accord_rgpd = isset($_POST['accord_rgpd']) ? 1 : 0;
        // ...autres champs...

        // Préparer et exécuter la requête SQL
        $sql = "INSERT INTO inscriptions (evenement_et_date, prenom, nom, email, telephone, niveau, accord_pay, accord_rgpd) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$evenement_et_date, $prenom, $nom, $email, $telephone, $niveau, $accord_pay, $accord_rgpd]);

        echo "Inscription enregistrée avec succès";
        var_dump($_POST);

    }
} catch(PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
?>