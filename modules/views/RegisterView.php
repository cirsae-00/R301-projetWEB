<?php

namespace views;

class RegisterView
{

    public function show(): void { // PSR-12: opening brace next line
        ob_start();
        ?>

        <section>

            <h2>Inscription</h2>

            <form method="post" action="" id="form_register">
                <label>
                    <input type="email" name="email" placeholder="E-Mail">
                </label>
                <label>
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="submit" name="sign_in" value="Inscription">
                </label>
            </form>

        </section>

        <a href="../../index.php?page=legal" class="mentions_legales">Mentions légales</a>

        <?php

        new \views\Layout('Inscription', ob_get_clean())->show();
    }

}