<?php
namespace views;
class HomepageView { // PSR-12: opening brace next line
        public function show(): void { // PSR-12: opening brace next line
            ob_start();
        ?>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

            </table>

            <form>
                <label>
                    <input type="text" id="wordEntered" name="wordEntered" placeholder="Entrez un mot" minlength="6" maxlength="6" required>
                </label>

            </form>
            <a href="../../index.php?page=login" class="se_connecter">Se connecter</a>
            <a href="../../index.php?page=register" class="se_connecter">S'inscrire</a>
            <a href="../../index.php?page=legal" class="mentions_legales">Mentions légales</a>
            <?php

            new Layout('Les employed divas', ob_get_clean())->show();
        }

    }

