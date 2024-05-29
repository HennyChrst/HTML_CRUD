<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Array</title>
</head>
<body>
    <h2>Perhitungan Array</h2>
    <form action="" method="post">
        <label for="numbers">Masukkan Angka (pisahkan dengan koma):</label><br>
        <input type="text" name="numbers" id="numbers"><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        
        $numbersInput = $_POST['numbers'];

        $numbersArray = explode(',', $numbersInput);

        $numbersArray = array_map('trim', $numbersArray);
        $numbersArray = array_map('intval', $numbersArray);

        $count = count($numbersArray);

        $sum = array_sum($numbersArray);

        // Menghitung rata-rata
        $average = $sum / $count;

        // Menampilkan hasil
        echo "<h3>Hasil:</h3>";
        echo "Jumlah: $sum <br>";
        echo "Rata-rata: $average";
    }
    ?>
</body>
</html>
