<?php

namespace views;
class SuccessfullLoginView {
    public function show(): void {
        ob_start();
        ?>
        <h1>Connexion réussie</h1>

        <a href="../../index.php?=home" class="retour">Retour</a>

        <?php
    }
}