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
        <form method="GET" action="datainput.php" style="padding: 10px;">
            Name : <input type="text" name="nama" id="" required>
            Umur : <input type="text" name="umur" id="" required>
            <br>
            <br>
            <p>Gender :</p>
              <input type="radio" id="laki" name="gender" value="Laki-Laki" required>
              <label for="laki">Laki-Laki</label><br>
              <input type="radio" id="Perempuan" name="gender" value="Perempuan" required>
              <label for="Perempuan">Perempuan</label><br>
            <br>
            <p>Hobby :</p>
            <input type="checkbox" id="gaming" name="hobby[]" value="Gaming">
            <label for="gaming"> Gaming </label><br>
            <input type="checkbox" id="makan" name="hobby[]" value="Makan">
            <label for="makan"> Makan </label><br>
            <input type="checkbox" id="tidur" name="hobby[]" value="Turu">
            <label for="tidur"> Turu </label><br><br>
            <label for="cars">Pilih Kendaraan :</label>
            <select id="cars" name="kendaraan" style="width: 100px;" required>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="vw">VW</option>
                <option value="audi" selected>Audi</option>
            </select>
            <br>
            <br>
            <label for="alamat">Alamat :</label>
            <br>
            <textarea id="alamat" name="alamat" rows="4" cols="50" required>

            </textarea>
            <br>
            <button type="submit" name="simpan">Simpan Data !</button>
        </form>
    </div>
</body>

</html>