<?php 
$tabV1 = [];
for ($i=0; $i<100; $i++) {
    $tabV1 [] = $i + 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v1</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v1</h1>
    <ul>
        <?php
        for ($i=0; $i < count ($tabV1); $i++){
            echo "<li> $tabV1[$i] </li>";
        }
        ?>
    </ul>

</body>
</html>
