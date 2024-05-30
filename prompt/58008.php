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
        <li>Log cible: 58008</li>
        <li>Nom: Garreau</li>
        <li>Prénom: Laurette</li>
        <li>Sexe: F</li>
        <li>Date de naissance: 07/12/1997</li>
        <li>Lieu de naissance: Uccle</li>
        <li>Nationalité: Belge</li>
        <li>Pays de résidence: Belgique</li>
        <li>Profession: Étudiant</li>
        <li>Adresse: Rue Maurice Wilmotte, 2, St-Gilles, BRUSSEL 1060</li>
        <li>Famille proche connue: 2 parents, 2 frères, 1 soeur</li>
        <li>Caractéristique physique:</li>
        <li>Poids: 110.6kg</li>
        <li>Taille: 167cm</li>
        <li>Groupe Sanguin: A-</li>
        <li>Objectif de la session: Etude de la réaction du sujet face à une proie armée</li>
        <li>22:00 - Intérieur infrastructure, secteur provisoire Beta.</li>
        <li>22:15 - Le sujet a traqué la cible depuis le secteur Oméga, l'état de faim prolongé a poussé le sujet à traquer une cible de corpulence adéquate, et lui a fait quitter le lieu de chasse habituel.</li>
        <li>22:20 - Des armes de catégorie D ont été prodiguée à la cible, suite à une première utilisation de l'arme, le comportement du sujet PDN-45 a changé, se déplaçant de manière plus prudente pour se rapprocher de sa cible.</li>
        <li>22:30 ~ 23:00 - Le sujet PDN-45 se déplace hors du champs de vision de sa cible, possible technique pour la perturber en augmentant son stress afin de la fatiguer.</li>
        <li>23:00 - Fin de la session d'entrainement, la cible a été confirmée KIA.</li>
      </ul>
    </div>
    <script src="logs.js"></script>
  </body>
</html>