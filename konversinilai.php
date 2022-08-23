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
            <form method="post">
                <table>
                </table>
                <table style="text-align: left; width: 496px;" border="1" cellpadding="2" cellspacing="2">
                    <tbody>
                        <tr>
                            <td style="width: 99px;">Nilai</td>
                            <td style="width: 24px;">:</td>
                            <td style="width: 348px;"><input name="nilai1"></td>
                        </tr>
                        <tr>
                            <td>Grade Anda</td>
                            <td>:</td>
                            <td>

                                <?php
                                @$nilai1 = $_POST['nilai1'];
                                ?>

                                <?php
                                if ($nilai1 == " ") {
                                    echo "";
                                } else if ($nilai1 <= 50) {
                                    echo 'E';
                                } else if ($nilai1 >= 50 && $nilai1 < 60) {
                                    echo 'D';
                                } else if ($nilai1 >= 60 && $nilai1 < 70) {
                                    echo 'C';
                                } else if ($nilai1 >= 70 && $nilai1 <= 84) {
                                    echo 'B';
                                } else if ($nilai1 >= 85 && $nilai1 <= 100) {
                                    echo 'A';
                                } else {
                                    echo 'tidak berada dalam GRADE bilangan.';
                                }
                                ?>
                            </td>
                            </center>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <input name="ok" value="OK" type="submit">
            </form>
            <br>
            </td>
            </tr>
            <tr>
                <td style="width: 788px; text-align: center; background-color: rgb(51, 51, 51);" colspan="2" rowspan="1"><span style="color: white;"><?php require_once "footer.php"; ?></span><br>
                </td>
            </tr>
            </tbody>
            </table>
        </div>
    </body>

    </html>