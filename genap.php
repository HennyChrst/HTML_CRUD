<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping genap</title>
</head>
<body>
    <h2>Perhitungan Array dan Looping</h2>
    <?php
    $numbers = range(1000, 2, 2);
   
    $total_numbers = count($numbers);

    echo "<p>Jumlah elemen dalam array: $total_numbers</p>";

    echo "<p>Looping dari 1000 hingga 2 hanya untuk angka genap:</p>";
    echo "<ul>";
    for ($i = 1000; $i >= 2; $i -= 2) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
    