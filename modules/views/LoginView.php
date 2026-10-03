<?php

namespace views;

class LoginView
{

    public function show(): void { // PSR-12: opening brace next line
        ob_start();
        ?>

        <section>

            <h2>Connexion</h2>

            <form method="post" action="">
                <label>
                    <input type="email" name="email" placeholder="E-Mail">
                </label>
                <label>
                    <input type="password" name="password" placeholder="Mot de passe">
                </label>
                <a href="../../index.php?page=pwforgotten">Mot de passe oublié ?</a>
                <label>
                    <input type="submit" name="login" value="Connexion">
                </label>
            </form>

        </section>
        <?php

        (new \views\Layout('Connexion', ob_get_clean()))->show();
    }

}