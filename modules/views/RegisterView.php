<?php

namespace views;

class RegisterView
{
    public function show(array $errors): void { // PSR-12: opening brace next line
        ob_start();
        ?>

        <section>

            <h2>Inscription</h2>

            <form method="post" action="../../index.php?page=register" id="form_register">
                <label>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <span class="errors">
                        <?php
                        if(!empty($errors['nom'])){
                            echo $errors['nom'];
                        }
                        ?>
                    </span>
                </label>
                <label>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                    <span class="errors">
                        <?php
                        if(!empty($errors['nom'])){
                            echo $errors['nom'];
                        }
                        ?>
                    </span>
                </label>
                <fieldset id="gender_choice">
                    <legend>Genre :</legend>
                    <label><input type="radio" name="gender" value="m" required>Homme</label>
                    <label><input type="radio" name="gender" value="f">Femme</label>
                    <label><input type="radio" name="gender" value="ud">Non-précisé</label>
                </fieldset>
                <label>
                    <input type="email" name="email" placeholder="E-Mail" required>
                    <span class="errors">
                        <?php
                        if(!empty($errors['email'])){
                            echo $errors['email'];
                        }
                        if(!empty($errors['emailExists'])){
                            echo $errors['emailExists'];
                        }
                        ?>
                    </span>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <span class="errors">
                        <?php
                        if(!empty($errors['passwordLen'])){
                            echo $errors['passwordLen'];
                        }?>
                        <br>
                        <?php if(!empty($errors['passwordContent'])){
                            echo $errors['passwordContent'];
                        }
                        ?>
                    </span>
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