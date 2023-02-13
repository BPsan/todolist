<?php

require_once('helpers.php');

$css = ['css/login.css'];

$login = include_template('login.php');
$site = include_template('navigation.php', ['content' => $login]);

print($site);