<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-pdo</title>
</head>
<body>
    <?php 
    require "lib/main.php";
    ?>
    <h1>Rijkste mensen in de wereld</h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Naam</td>
                <td>Vermogen</td>
                <td>Leeftijd</td>
                <td>Bedrijf</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                $all = getAllRichestPersons($pdo);
                foreach ($all as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->id . "</td>";
                    echo "<td>" . $value->name . "</td>";
                    echo "<td>" . $value->networth . "</td>";
                    echo "<td>" . $value->Age . "</td>";
                    echo "<td>" . $value->myCompany . "</td>";
                    echo "<td><a href='delete.php?id=$value->id'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>