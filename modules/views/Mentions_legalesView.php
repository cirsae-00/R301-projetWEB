<?php
namespace views;

class Mentions_legalesView {
    public function show(): void {
        ob_start();
        ?>
        <h1>Mentions légales</h1>

        <h2>Conception du site</h2>

        <ul>
            <li>FOUGERON Lena</li>
            <li>LEFEBVRE Jimmy</li>
            <li>MARTIN Diego</li>
        </ul>

        <h2>Données personnelles</h2>

        <p>l’éditeur, responsable de traitement, s’engage à ce que la collecte et le traitement de ces
            informations soient effectués conformément au RGPD.</p> <br>

        <p>Tout utilisateur dispose, à tout moment et quelle qu’en soit la raison, d’un droit d’accès,
            de modification, de rectification et de suppression des données personnelles qu’il aurait indiquées
            lors de l’utilisation du Site.</p>

        <p> Pour exercer ses droits, l’utilisateur peut demander la suppression de son compte ou des données collectées
            auprès de l’éditeur (également concepteur et réalisateur).</p>

        <h2>Hébergement</h2>

        <p>La société ALWAYSDATA, SARL au capital de 200.000 € immatriculée au RCS de Paris sous le numéro 492 893 490
            dont le siège social se trouve 91 rue du Faubourg Saint Honoré - 75008 Paris.</p>


        <a href="../../index.php" class="retour">Retour</a>

        <?php

        new Layout('Mentions légales', ob_get_clean())->show();
    }
}