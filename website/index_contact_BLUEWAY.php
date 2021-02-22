<!DOCTYPE HTML>

<html lang="fr">
<head>
    <title>BLUE WAY - Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" type="images/x-icon" href="images/icones/icon_test.png" />
    <script type="text/javascript" src="js/form.js"></script>
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index_accueil_BLUEWAY.html"><img src="images/logoTitle2.png" alt="logo" height="100%" style="border-radius: 5px"/></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index_accueil_BLUEWAY.html">Accueil</a></li>
        <li><a href="index_piscine_BLUEWAY.html">Piscine</a></li>
        <li><a href="index_spa_BLUEWAY.html">Spa</a></li>
        <li><a href="index_sauna&hammam_BLUEWAY.html">Sauna, Hammam & Cabine IR</a></li>
        <li><a href="index_accessoire_BLUEWAY.html">Accessoires</a></li>
        <li><a href="index_galerie_BLUEWAY.html">Galerie Photos</a></li>
        <li><a href="#footer">Contact</a></li>
    </ul>
</nav>

<!--go top button-->
<button onclick="goTop()" id="topBtn" title="Go to top"><img width="50%" src="images/icones/baseline_keyboard_arrow_up_black_48dp.png"></button>
<script type="text/javascript" src="js/topFunction.js"></script>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <h2>Nous contacter</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <form action="mailto:bluewaymv@outlook.com?subject=Demande client" name="envoi" method="post" enctype="text/plain">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" maxlength="100" required placeholder="Nom">
                    <br><br>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" maxlength="100" required placeholder="Prénom">
                    <br><br>
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" id="mail" maxlength="100" required placeholder="mail">
                    <br><br>
                    <label for="contenu">Contenu du mail :</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu du mail" required style="resize: none; height: 350px"></textarea>
                    <br><br><br><br>
                    <div style="text-align: center">
                        <input type="submit" value="Envoyer !" name="envoyer">
                    </div>

                </form>
                <?php
                if (isset($_POST['contenu'])) {
                    $position_arobase = strpos($_POST['mail'], '@');
                    if ($position_arobase === false)
                        echo '<script>alert("Votre email doit comporter un arobase.")</script>';
                    else {
                        $retour = mail('cadetgauthier4@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                        if($retour)
                            echo '<script>alert("Votre message a été envoyé.")</script>';
                        else
                            echo '<script>alert("Erreur.")</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="div-row-footer">
        <div class="div-col-footer">
            <ul>
                <li class="li-footer">Rue de la Grande Rayée, 57280 Hauconcourt</li>
                <li class="li-footer"><a href="index_contact_BLUEWAY.php">bluewaymv@outlook.com</a></li>
                <li class="li-footer">
                    <table>
                        <tr>
                            <td class="Tjour">Lundi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30<br>de début Avril à fin Août</td>
                        </tr>
                        <tr>
                            <td class="Tjour">Mardi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30</td>
                        </tr>
                        <tr>
                            <td class="Tjour">Mercredi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30</td>
                        </tr>
                        <tr>
                            <td class="Tjour">Jeudi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30</td>
                        </tr>
                        <tr>
                            <td class="Tjour">Vendredi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30</td>
                        </tr>
                        <tr>
                            <td class="Tjour">Samedi :</td>
                            <td class="Thoraire">9h30-12h00 14h00-18h30</td>
                        </tr>
                    </table>
                </li>
            </ul>
        </div>
        <div class="div-col-footer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.6855051216016!2d6.180250285866431!3d49.22549116266181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x49e86c76e452520d!2sBlue%20Way%20Piscines!5e0!3m2!1sfr!2sfr!4v1599314034473!5m2!1sfr!2sfr" width="95%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <div class="copyright">
        <a href="index_mentions_legales_BLUEWAY.html">mentions légales</a>
    </div>
    <div class="copyright">
        &copy; 2020 - BlueWay
    </div>
</footer>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollex.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>

</body>
</html>
