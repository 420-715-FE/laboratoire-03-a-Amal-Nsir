<?php 
$suppression = [];
for ($i=0; $i<10; $i++) {
    $suppression [] =  rand(1 , 100);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Suppression</h1>
    <h2> Avant </h2>
    <ol>
        <?php
        for ($i = 0; $i < count ($suppression ); $i ++) {
            echo "<li> $suppression[$i]</li>";
        }
        ?>
    </ol>

    <h2> Après </h2>
    <ol>
        <?php
        array_splice($suppression, 3, 1);
        for ($i = 0; $i < count ($suppression ); $i ++) {
            echo "<li> $suppression[$i]</li>";
        }
        ?>
    </ol>
    
    
</body>
</html>
