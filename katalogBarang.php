<?php
    $barang = array (
        array("Tepung", 1, 20),
        array("Gula", 5, 25),
        array("Pisang", 2, 30),
        array("Terigu", 1, 20),
        array("Mantan", 1, 0),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Barang Sheishei</title>
    <style>
        div {
            background-color: rgba(237, 231, 225, 1);
            width: 80%;
            text-align: center;
            margin: auto;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div>
        <form action="">
            <input type="submit" name="sortingBerat" value="sortingBerat" onclick="sortingBerat()" />
            <input type="submit" name="sortingNama" value="sortingNama" onclick="sortingNama()" />
        </form>

        <?php
            function sortingBerat(){
                foreach ($barang as $nama){
                    asort($nama);
                }
            }
            function sortingNama(){
                echo "The insert function is called.";
            }
        ?>
    </div>
    <div>
        <h1>KONVERSI BARANG SHEISHEI</h1>
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
            <?php for($i = 0; $i < 5; $i++) : ?>
            <tr style="<?= $barang[$i][2] == 0 ? 'background-color: red;' : '' ?>">
                <td><?= $i+1; ?></td>
                <td><?= $barang[$i][0]; ?></td>
                <td><?= $barang[$i][1]; ?></td>
                <td><?= $barang[$i][1]*1000; ?></td>
                <td><?= $barang[$i][1]*1000000; ?></td>
                <td><?= $barang[$i][2]; ?></td>
            </tr>
            <?php endfor ?>
        </table>
    </div>
</body>
</html>