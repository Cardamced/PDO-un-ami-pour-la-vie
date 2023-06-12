<?php

require_once '_connec.php';
require_once 'errors.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Liste de friends</title>
</head>

<body>
    <h1>Liste de friends</h1>
    <ul>
        <?php
        foreach ($friends as $friend) {
            echo "<li>" . $friend['firstname'] . $friend['lastname'] . "</li>";
        }

        ?>
    </ul>

    <form action="errors.php" method="post">
        <div>
            <label for="firstname">firstname :</label>
            <input type="text" id="firstname" name="firstname" maxlength="45" required>
        </div>
        <div>
            <label for="lastname">lastname :</label>
            <input type="text" id="lastname" name="lastname" maxlength="45" required>
        </div>
        <div class="button">
            <button type="submit">send</button>
        </div>
    </form>
    </html>
