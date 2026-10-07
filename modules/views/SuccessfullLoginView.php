<?php

namespace views;

class SuccessfullLoginView
{
    public function show($playerId, bool $isEasterEgg = false): void
    {
        ob_start();
        ?>

        <?php if ($isEasterEgg) : ?>
        <style>
            body {
                background-image: url('../../images/garygary.jpg');

                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            body, h2, p, a.retour {
                color: white !important;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
            }
        </style>
    <?php endif; ?>
        <!-- -------------------------------------------------- -->

        <h2>Connexion réussie !</h2>

        <?php if ($isEasterEgg) : ?>
        <div class="easter-egg" style="background-color: rgba(255, 215, 0, 0.3); padding: 15px; border-radius: 8px; margin: 15px 0; border: 2px solid #ffd700;">
            <p><strong> Vous avez trouvé Gary !</strong> Appréciez votre séjour ici et admirez.</p>
        </div>
    <?php endif; ?>

        <a href="../../index.php?page=home" class="retour">Retour à l'accueil</a>

        <?php

        new Layout('Espace Connecté', ob_get_clean())->show();
    }
}