<?php
    $mahasiswa = [
        "Henny Christine",
        "Maura",
        "Larasati"
];
    
    $nama_depan = "Henny";
    $nama_belakang = "Christine";

    $nama_lengkap = $nama_depan . $nama_belakang;
?>


<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>Henny Christine</td>
            <td>Kamal Prihandani</td>
            <td>Maura Aqlaila</td>
        </tr>
    <ul>
    <!-- menampilakn array -->
    <?php foreach ($mahasiswa as $m) { ?>
        <?php echo "<li>" . $m . "</li>" ?>
        <?php } ?> 
    </ul>

    <?php echo $nama_lengkap; ?>
</body>
</html?