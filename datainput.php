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
        <?php
        if (isset($_GET['simpan'])) {
            $nama = $_GET['nama'];
            $umur = $_GET['umur'];
            $gender = $_GET['gender'];
            $hobby = $_GET['hobby'];
            $kendaraan = $_GET['kendaraan'];
            $alamat = $_GET['alamat'];
            $realHobby =implode(",", $hobby);
            echo "Nama : $nama <br/>";
            echo "Umur : $umur <br/>";
            echo "Gender : $gender <br/>";
            echo "Hobby : $realHobby <br/>";
            echo "Kendaraan : $kendaraan <br/>";
            echo "Alamat : $alamat <br/>";
        }
        ?>
    </div>
</body>

</html>
