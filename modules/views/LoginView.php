<?php

namespace views;

class LoginView
{

    public function show(array $errors): void { // PSR-12: opening brace next line
        ob_start();
        ?>

        <section>

            <h2>Connexion</h2>

            <form method="post" action="" id="form_login">
                <label>
                    <input type="email" name="email" placeholder="E-Mail" required>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </label>
                <a href="../../index.php?page=pwforgotten" class="oubliMdp">Mot de passe oublié ?</a>
                <label>
                    <input type="submit" name="login" value="Connexion">
                </label>
            </form>
        </section>

        <a href="../../index.php?=home" class="retour">Retour</a>
        <a href="../../index.php?page=legal" class="mentions_legales">Mentions légales</a>

        <?php

        new Layout('Connexion', ob_get_clean())->show();
    }

}