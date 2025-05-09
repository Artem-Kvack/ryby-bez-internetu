<?php

$connection = new mysqli('localhost', 'root', '', 'wedkowanie');

if ($connection->connect_error) {
    die("Błąd połączenia: " . $connection->connect_error);
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkuj z nami!</title>
    <link rel="stylesheet" href="styly_1.css">
</head>

<body>
    <div class="header">
        <h2>Wędkuj z nami!</h2>
    </div>
    < class="container">
        <div class="left-block">
         <img src="ryba.jpg" alt=" Szczupak">
            
    </div>
     <section class="right-block">
       <h3>Ryby spokojnego żeru(białe)</h3>
   
        
     
<?php
$query = "
   SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 2;
    ";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)) {
    echo "<li>{$row['id']} pływa w rzece {$row['nazwa']}, {$row['wystepowanie']}</li>";
}


?>

<a href="https://wedkuje.pl/ ">Odwiedź także</a>
<a href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a>
            
              </section>
</div>
        
    

    <div class="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>

    <?php
    $connection->close();
    ?>
</body>

</html>