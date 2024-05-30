<!DOCTYPE html>
<html>
    <head>
        <title>Urbexcité</title>
        <link rel="stylesheet" href="../main.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container accueil">
            <nav class="main_menu">
                <ul>
                    <!-- <li><a href="/prompt">Admin</a></li> -->
                    <li><a class="logo-link" href="../index.html"><img src="../images/Logo.png"></a></li>
                    <li><a href="#">Galerie</a></li>
                    <li><a href="../apropos">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="container__main">
                <h1>Galerie</h1>
                <ul class="galery__list">
                    <?php
                        $images = scandir('../images/doel');
                        foreach ($images as $image) {
                            if ($image !== '.' && $image !== '..') {
                                echo '<li><img src="../images/doel/' . $image . '"></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <footer>
            <div class="container">
                <h2>Découvrez l'inconnu, explorez le mystère avec Urbexcité !</h2>
                <div class="footer__form">
                    <form action="#" method="post" id="contact">
                        <div>
                            <input type="text" name="name" placeholder="Nom" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" name="bloodgroup" placeholder="Groupe Sanguin" required>
                        </div>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>© 2001 Urbexcité. Tous droits réservés.</p>
            </div>
        </footer>

        <div class="form__popup hidden">
            <div class="form__popup__content">
                <h3>Avant de continuer, veuillez accepter les CGU</h3>
                <div class="popup__cgu">
                    <p>Je m'engage à:</p>
                    <ul>
                        <li>Toujours prioriser votre sécurité et celle des autres. Évitez de prendre des risques inutiles et soyez conscient des dangers potentiels tels que les structures instables, les planchers affaissés, les matériaux toxiques, etc.</li>
                        <li>Les structures abandonnées peuvent être imprévisibles. Restez attentif à votre environnement et réagissez rapidement en cas de situation dangereuse.</li>
                        <li>Assurez-vous de connaître et de respecter les lois et réglementations locales concernant l'accès aux propriétés privées ou abandonnées. L'exploration sans autorisation peut entraîner des conséquences légales.</li>
                        <li>Respectez les lieux que vous explorez en évitant de causer des dommages ou de perturber l'environnement. Laissez les lieux intacts comme vous les avez trouvés. Et surtout, ne forcez rien pour rentrer ! Si un endroit est verrouillé, tant pis pour vous.</li>
                        <li>Assurez-vous d'être équipé pour votre sécurité, avec notamment une lampe de poche, des vêtements adaptés et de bonnes chaussures. Et bien sûr, votre téléphone (en silencieux) ! Afin de rester joignable en cas de souci.</li>
                        <li>Si possible, explorez en groupe pour des raisons de sécurité. Avoir un partenaire peut être utile en cas d'urgence.</li>
                        <li>Avant de partir explorer un lieu, renseignez-vous sur son histoire et sur les éventuels dangers associés. Soyez conscient des risques potentiels et des précautions à prendre.</li>
                        <li>Ne partagez pas d’informations personnelles ou sensibles sur les lieux que vous explorez, notamment sur les réseaux sociaux, afin de protéger la vie privée des personnes concernées et évidemment de garder le spot secret. Restez discret ! </li>
                        <li>Notre équipe récupérera vos téléphones au début de la visite, afin de s’assurer de la discrétion et du respect des consignes.</li>
                    </ul>
                </div>
                <div class="popup__input">
                    <input type="checkbox" id="cgu" name="cgu">
                    <label for="cgu">J'accepte les conditions générales d'utilisation</label>
                </div>
                <a class="btn" href="#" id="acceptCgu">Accepter</a>
            </div>
        </div>

        <script src="../main.js"></script>
    </body>
</html>