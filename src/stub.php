<?php

spl_autoload_register(function ($name) {
    $d = (strpos(__FILE__, ".phar") === false ? __DIR__ : "phar://" . __FILE__ . "/src");
    if ($name == "test-phar-aaaa") require_once($d . "/src/test-phar-aaaa.php");
    if ($name == "test-phar-bbbb") require_once($d . "/src/test-phar-bbbb.php");
    if ($name == "test-phar-cccc") require_once($d . "/src/test-phar-cccc.php");
});

__HALT_COMPILER();
