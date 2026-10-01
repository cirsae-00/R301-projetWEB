<?php
namespace views;
class HomepageView { // PSR-12: opening brace next line
        public function show(): void { // PSR-12: opening brace next line
            ob_start();
        ?>
            <h1>BONJOUR</h1>
            <?php

            (new \views\Layout('Les employed divas', ob_get_clean()))->show();
        }

    }

