<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array dan looping</title>
</head>
<body>
    <h2>Perhitungan Array dan Looping</h2>
    <?php
    
    $numbers = range(1, 1000);
    
    $total_numbers = count($numbers);

    echo "<p>Jumlah elemen dalam array: $total_numbers</p>";

    echo "<p>Looping dari 1 hingga 1000:</p>";
    echo "<ul>";
    for ($i = 1; $i <= 1000; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>