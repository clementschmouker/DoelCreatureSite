<?php
// Start session to persist login state
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // If user is not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Urbexcité | Prompt</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
      <ul class="promptLines" id="credentialLines">
        <li>Log cible: 70007</li>
        <li>Nom: Bossé</li>
        <li>Prénom: Gaston</li>
        <li>Sexe: M.</li>
        <li>Date de naissance: 15/05/1982</li>
        <li>Lieu de naissance: Bruxelles</li>
        <li>Nationalité: Belge</li>
        <li>Pays de résidence: Belge</li>
        <li>Emploi: inconnu</li>
        <li>Etat civil: divorcé</li>
        <li>Adresse: Rue de Virton, 492, Evregnies, Hainaut, 7730</li>
        <li>Famille proche connue: Parents décédés, fils unique</li>
        <li>Caractéristique physique:</li>
        <li>Poids: 89.6kg</li>
        <li>Taille: 170cm</li>
        <li>Groupe sainguin: A+</li>
        <li>Objectif de la session: Etudier le comportement du sujet PDN-45 lorsqu'une cible entre et ressort de son nid.</li>
        <li>19:30 - session de jour débuté, Lieu: Secteur epsilon</li>
        <li>19h40 - Le groupe constitué des cibles 70007 et 07734 ont été guidés vers le secteur Oméga</li>
        <li>20:00 - Suite à la découverte du nid, le comportement de la cible 70007 a changé soudainement, nous avons du le maitriser. Il a été confiné dans l'infrastructure du secteur delta pour le reste de la session avant vidange.</li>
        <li>20:30 - La cible 07734 a été guidé à l'opposé du secteur delta, vers le secteur sigma</li>
        <li>20:35 - Relâchement du sujet PDN-45, il est directement partit vers le secteur Oméga</li>
        <li>20:37 - Après inspection du nid, l'aggressivité du sujet PDN-45 semble avoir augmenté. Potentiel trace détectée par son odorat</li>
        <li>20:39 - Le sujet est partit en direction du secteur Delta</li>
        <li>Conclusion préliminaire: Comportement territorial exacerbé lors de l'entrée de son nids. Comme suggéré suite à l'incident "Poliphème", le sujet PDN-45 traquera l'intru en priorité, même si il y a d'autres cibles, même si la cible traquée quitte le secteur Oméga.</li>
      </ul>
    </div>
    <script src="logs.js"></script>
  </body>
</html>