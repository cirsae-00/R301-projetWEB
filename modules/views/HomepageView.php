<?php
namespace views;
class HomepageView { // PSR-12: opening brace next line
        public function show(): void { // PSR-12: opening brace next line
            ob_start();
        ?>
            <h1>INFODLE</h1>
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

            <button>Se connecter</button>

            <a href="Mentions_legales.php">mentions légales</a>
            <?php

            (new \views\Layout('Les employed divas', ob_get_clean()))->show();
        }

    }

