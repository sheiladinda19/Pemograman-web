<?php
require ("barang.php");

$beras = new Barang('beras', 1, 10);
$telur = new Barang('telur', 0.2, 20);
$gula = new Barang('gula', 0, 0);
$minyak = new Barang('minyak', 0.5, 5);
$susu = new Barang('susu', 1, 10);
$mie = new Barang('mie', 0.5, 10);
$seluruhBarang = [$beras, $telur, $gula, $minyak, $susu, $mie];

if(!empty($_POST)){
    $nama=$_POST["nama"];
    $berat=$_POST["berat"];
    $stok=$_POST["stok"];
    $name = $nama;
    $name = new Barang($nama, $berat, $stok);
    array_push($seluruhBarang, $name);
}else{
    $nama=null;
    $berat=null;
    $stok=null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Barang Sheishei</title>
    <style>
        body {
            width: 80%;
            margin: auto;
            
        }
        div {
            background-color: rgba(237, 231, 225, 1);
            text-align: center;
            justify-content: center;
        }
        section {
            display: flex;
            background-color: rgba(237, 231, 225, 1);

            min-height: 200px;
            align-items: center;
        }
        form, table {
            margin: 20px;
        }
        table {
            width: 120%;
        }
    </style>
</head>
<body>
    <div>
        
    </div>
    <div>
        <h1>KONVERSI BARANG SHEISHEI</h1>
    </div>
    <section>

        <div>
            <form action="" method="post">
                <label for="nama">Nama Barang:</label><br>
                <input type="text" id="nama" name="nama" required><br>
                <label for="berat">Berat Barang:</label><br>
                <input type="number" id="berat" name="berat" required placeholder="berat dalam KG"><br>
                <label for="stok">Stok Barang:</label><br>
                <input type="number" id="stok" name="stok" required><br><br>
                <input type="submit">
            </form>
        </div>
        <div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Berat (kg)</th>
                    <th>Berat (g)</th>
                    <th>Berat (mg)</th>
                    <th>Stok</th>
                </tr>
                <?php foreach ($seluruhBarang as $key=>$barang ): ?>
                <tr style="<?= $barang->getStok() == 0 ? 'background-color: red;' : '' ?>">
                    <td><?= $key+1; ?></td>
                    <td><?= $barang->getNama(); ?></td>
                    <td><?= $barang->getBerat(); ?></td> 
                    <td><?= $barang->convertBeratG($barang->getBerat()); ?></td>
                    <td><?= $barang->convertBeratMG($barang->getBerat()); ?></td>
                    <td><?= $barang->getStok(); ?></td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>
</body>
</html>