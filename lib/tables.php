<?php

function createTables($pdo)
{
    $tables = array(
        "CREATE TABLE IF NOT EXISTS RichestPeople (
            id          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name        varchar(200),
            Age         tinyint,
            myCompany   varchar(200)
        );"
    );

    foreach ($tables as $sql) {
        $pdo->exec($sql);
    }
}
