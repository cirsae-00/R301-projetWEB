<?php
require '_assets/includes/autoloader.php';

(new \includes\autoloader())->register();
(new \controllers\Router())->route();

