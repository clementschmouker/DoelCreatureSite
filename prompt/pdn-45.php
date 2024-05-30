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
        <li><img src="pdn45.png" alt="PDN-45"></li>
        <li>Objet: <b>Parasite ********</b></li>
        <li>Nom de code: PDN-45</li>
        <li>Durée de captivité: <b>***********************</b></li>
        <li>Descriptif: PDN-45 mesure 5 mètres de longueur, queue comprise et 2 mètres de hauteur. Sa fourrure est noire et revêche, avec un mélange de plume et de fourrure. D’apparence, il semble posséder un museau à l’extrémité de son nez, mais il semble fonctionner de la même façon qu’un bec. <b>**** ******************** ************************************ ****************** *********************** *********** ******************************************* *** *********** ****** ** ******************************** **************</b>. On supposerait de par son apparence que PDN-45 serait un mélange entre un <b>***</b> et un <b>********</b> des suites des <b>********* *** *************** ************************************************************************************* *******************************************************************************************</b></li>
        <li>
            Observations: PDN-45 est une créature aussi bien nocturne que diurne. Cependant, ses chasses s’effectuent principalement la nuit, ses conditions physiques étant bien plus adaptées à l'environnement sombre et aux activités externes réduites.. Il semble omnivore, mais se nourrit essentiellement de viande. Après différents tests, nous avons conclu que son alimentation doit être favorisée par la viande <b>humaine</b>. 
            <b>*********************** ********************************* ******** ************ ******************** ************************** ********************* *********************** ********************* *********************** ************************ ********************** *********************** ********************* *********************** ************************ ********************** *********************** ********************* *********************** ************************ ********************** *********************** ********************* *********************** ************************ *************** ***************** ************** ************************ **************************** ************* ************** **************** *************</b>.
            Suite à ces différentes observations, nous avons conclu que PDN-45, dans la chaîne animale, reprendrait des critères pour être à un rang au-dessus des superprédateurs. Faisant de lui l’une des créatures les plus dangereuses connues à ce jour. Nous poursuivrons les observations.
        </li>
      </ul>
    </div>
    <script src="logs.js"></script>
  </body>
</html>