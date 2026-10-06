<?php

namespace views;
class PlansiteView {
    public function show() : void {
        ob_start();
        ?>
        <a href="../../index.php?page=login" class="forPlan">Se connecter</a>
        <a href="../../index.php?page=register" class="forPlan">S'inscrire</a>
        <a href="../../index.php?page=legal" class="forPlan">Mentions légales</a>
        <a href="../../index.php?page=pwforgotten" class="forPlan">Mot de passe oublié</a>
        <a href="../../index.php?page=plansite" class="forPlan">Plan du site</a>
        <a href="../../index.php?=home" class="forPlan">Accueil</a>


<?php
        new Layout('Plan du site', ob_get_clean())->show();
    }
}