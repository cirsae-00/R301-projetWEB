<?php

namespace views;
class PlansiteView {
    public function show() : void {
        ob_start();
        ?>
        <h1>Plan du site</h1>
        <p>Accueil</p>
        <br>
        <ul>
            <li>Inscription</li>
            <li>Connexion</li>
            <li>Mot de passe oublié</li>
        </ul>
        <br>
        <p>Mentions légales</p>

        <a href="../../index.php?page=home" class="retour">Retour</a>

<?php
        new Layout('Plan du site', ob_get_clean())->show();
    }
}