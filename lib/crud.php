<?php

// Create

// Read
function getAllRichestPersons(PDO $pdo) {
    $statement = $pdo->prepare("SELECT * FROM RichestPeople ORDER BY networth");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

// Update


// Delete

function deletePerson(PDO $pdo, int $id) {
    $statement = $pdo->prepare("DELETE FROM RichestPeople WHERE id = :id");
    $statement->bindValue(":id", $id);
    $statement->execute();
}