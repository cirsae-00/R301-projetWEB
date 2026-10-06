<?php

namespace views;

class SuccessfullLoginView
{
    public function show($playerId): void
    {
        ob_start();
        ?>

        <h2>Connexion réussie !</h2>

        <a href="../../index.php?page=home" class="retour">Retour à l'accueil</a>

        <?php

        // Utilisation de ton Layout (comme dans LoginView et RegisterView)
        new Layout('Espace Connecté', ob_get_clean())->show();
    }
}