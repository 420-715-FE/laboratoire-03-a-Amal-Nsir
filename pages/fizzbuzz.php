<?php 
$fizzBuzz = [];
for ($i=0; $i<100; $i++) {
    $fizzBuzz [] = $i + 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>FizzBuzz</h1>
    <ul> 
        <?php for ($i = 0; $i<count($fizzBuzz); $i++) {
            if ( $fizzBuzz [$i] % 3 == 0 && $fizzBuzz [$i] % 5 == 0){
                echo "<li> FizzBuzz </li>";

            } else if ($fizzBuzz [$i] % 5 == 0) {
                echo "<li> Buzz </li>";

            } else if ($fizzBuzz [$i] % 3 == 0) {
                echo "<li> Fizz </li>";

            } else {
                echo "<li> $fizzBuzz[$i]";
            }
               

        }
            
        
        ?>
    </ul>
</body>
</html>
