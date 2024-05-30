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
        <li>Log cible: 71370</li>
        <li>Nom: Austin</li>
        <li>Prénom: Arienne</li>
        <li>Sexe: F.</li>
        <li>Date de naissance: 21/02/2002</li>
        <li>Lieu de naissance: Bruxelles</li>
        <li>Nationalité: Française</li>
        <li>Pays de résidence: Belge</li>
        <li>Emploi: inconnu</li>
        <li>Etat civil: En cohabitation légale</li>
        <li>Adresse: Rue de la poste, 207, Racour, Liège, 4287</li>
        <li>Famille proche connue: 1 parent, 2 soeurs</li>
        <li>Caractéristique physique:</li>
        <li>Poids: 66.6kg</li>
        <li>Taille: 143cm</li>
        <li>Groupe sainguin: B+</li>
        <li>Objectif de la session: Tester le comportement du sujet face aux choix de cible humaines ou animales.</li>
        <li>19:00 - Début de l'expérience, lieu de la cible: secteur Epsilon</li>
        <li>19h05 - Sujet relâché</li>
        <li>19:08 - Contact entre la cible 71370 et la cible animale (BVD-001) (Postulat: suite aux expériences précédentes, notamment celles des cibles 60256, 58008, ou encore 70063, le sujet devrait s'intéresser à la cible animale plus corpulent)</li>
        <li>19:09 - Le sujet repère les 2 cibles et assiste à leur interraction</li>
        <li>19:15 - Séparation des deux cibles. 71370 se dirige vers le secteur sigma, la cible BVD-001 reste dans le secteur epsilon. Le sujet PDN-45 suit la cible 71370</li>
        <li>19:20 - Traque, chasse, et attaque typique des anciennes procédures</li>
        <li>19:22 - Suite à l'élimination de la cible 71370, le sujet PDN-45 entâme la traque de BVD-001. Comportement plus direct et rapide que les traques précédentes</li>
        <li>Conclusion préliminaire: Difficile de dire ce qui a effectivement changé le comportement du sujet. On observe une augmentation du temps d'observation de ses proies, ensuite, pour BVD-001, le sujet semble ne pas avoir eu un comportement aussi prudent qu'à l'habituel, malgré qu'il n'ai jamais interragit avec un bovidé. Est-ce que cela a à voir avec l'interraction avec la cible 71370 ? Etude requise.</li>
      </ul>
    </div>
    <script src="logs.js"></script>
  </body>
</html>