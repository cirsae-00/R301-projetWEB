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
            <a href="../controllers/Login.php" class="se_connecter">Se connecter</a>
            <?php

            (new \views\Layout('Les employed divas', ob_get_clean()))->show();
        }

    }

