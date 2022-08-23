<!--Design by foolishdeveloper.com-->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/code.css">
</head>

<body>
    <div class="wrapper">
        <?php include './skeleton/navbar.php'; ?>
        <?php include './skeleton/sidebar.php'; ?>
    </div>
    <div class="content card-3">
        <?php if (!isset($_POST['simpan'])) { ?>
            <form action="" method="post">
                <table style="text-align: left; width: 496px;" border="1" cellpadding="2" cellspacing="2">
                    <tbody>
                        <tr>
                            <td style="width: 99px;">Jumlah baris</td>
                            <td style="width: 24px;">:</td>
                            <td style="width: 348px;"><input name="r"></td>
                        </tr>
                        <tr>
                            <td>Jumlah kolom</td>
                            <td>:</td>
                            <td><input name="c"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <button type="submit" name="simpan">Simpan Data !</button>
            </form>
        <?php } else { ?>
            <table style="text-align: left; width: 496px;" border="1" cellpadding="2" cellspacing="2">
                <tbody>
                    <?php
                    $r = $_POST['r'];
                    $c = $_POST['c'];
                    for ($i = 1; $i <= $c; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $r; $j++) {
                            echo "<td> Baris " . $i . ", Kolom " . $j . "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>

</html>