<?php

require "lib/main.php";
if (array_key_exists('id', $_GET)) {
    deletePerson($pdo, $_GET['id']);
    echo "Deleted Person";
    header("Refresh: 3; URL=read.php");
}
