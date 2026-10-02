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
            </form>

        </section>
        <?php

        (new \views\Layout('Les employed divas', ob_get_clean()))->show();
    }

}