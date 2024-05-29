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
    
    $numbers = range(1000, 1);
    
    $total_numbers = count($numbers);

    echo "<p>Jumlah elemen dalam array: $total_numbers</p>";

    echo "<p>Looping dari 1000 hingga 1:</p>";
    echo "<ul>";
    for ($i = 1000; $i >= 1; $i--) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>