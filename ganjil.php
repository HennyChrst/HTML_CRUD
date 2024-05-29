<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping ganjil</title>
</head>
<body>
    <h2>Perhitungan Array dan Looping</h2>
    <?php
    $numbers = range(999, 1, -2);
   
    $total_numbers = count($numbers);

    echo "<p>Jumlah elemen dalam array: $total_numbers</p>";

    echo "<p>Looping dari 999 hingga 1 hanya untuk angka ganjil:</p>";
    echo "<ul>";
    for ($i = 999; $i >= 1; $i -= 2) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
    