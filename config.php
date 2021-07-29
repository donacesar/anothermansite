<?php
$host = $_SERVER['HTTP_HOST'];

if ($host === 'anothermansite') {
    include 'config_loc.php';
} else {
    include 'config_host.php';
}