<?php
$tabV2 = [];
if(isset($_GET['n'])) {
    if (is_numeric($_GET ['n'])) {
        $n = $_GET ['n'];
    } else {
        echo "entrez un nombre";
    }
} else {
    $n = 20 ;
}
for ($i=0; $i<=$n; $i++) {
    if ($i % 2 == 0){
        $tabV2 [] = $i;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v2</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v2</h1>
    <ul>
        <?php
        for ($i=0; $i<count($tabV2); $i++) {
            echo "<li> $tabV2[$i] </li>";
        }
        ?>
    </ul>
    <a href="nombres2.php?n=<?php echo $n+20; ?>">Ajouter 10 nombres</a>
</body>
</html>
