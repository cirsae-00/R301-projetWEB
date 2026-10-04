<?php

namespace views;

class RegisterView
{

    public function show(): void { // PSR-12: opening brace next line
        ob_start();
        ?>

        <section>

            <h2>Inscription</h2>

            <form method="post" action="../../_assets/includes/base.php" id="form_register">
                <label>
                    <input type="text" name="nom" placeholder="Nom" required>
                </label>
                <label>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                </label>
                <fieldset id="gender_choice">
                    <legend>Genre :</legend>
                    <label><input type="radio" name="gender" value="m" required>Homme</label>
                    <label><input type="radio" name="gender" value="f">Femme</label>
                    <label><input type="radio" name="gender" value="ud">Non-précisé</label>
                </fieldset>
                <label>
                    <input type="email" name="email" placeholder="E-Mail" required>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </label>
                <label>
                    <input type="submit" name="sign_up" value="Envoyer">
                </label>
            </form>

        </section>

        <a href="../../index.php?page=home" class="retour">Retour</a>
        <a href="../../index.php?page=legal" class="mentions_legales">Mentions légales</a>

        <?php

        new Layout('Inscription', ob_get_clean())->show();
    }

}