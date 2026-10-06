<?php

namespace views;
class SuccesfullLoginView {
    public function show(): void {
        ob_start();
        ?>
        <h1>Connexion réussie</h1>

        <?php
    }
}