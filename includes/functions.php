<?php

require 'app.php';

function includeTemplate ( $nombre ) {
    include TEMPLATES_URL . "/{$nombre}.php";
}