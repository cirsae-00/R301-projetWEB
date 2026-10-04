<?php

namespace views;

class PwForgottenView{
    public function show(): void{
        ob_start();
        ?>

        <section>

            <h2>Mot de passe oublié</h2>

            <form method="post" action="">
                <label>
                    <input type="email" name="email" placeholder="E-Mail">
                </label>
                <label>
                    <input type="submit">
                </label>
            </form>

        </section>
        <?php

        new \views\Layout('Mot de passe oublié', ob_get_clean())->show();
    }
}