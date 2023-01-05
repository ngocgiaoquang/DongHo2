<?php
    $db = new mysqli("localhost", "root","", "qldh");
    if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    $db->set_charset("utf8");
?>