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
        <div class="title">
            <center></center>
        </div>
        <table style="width: 100%;">
            <tr>
                <th>
                    Source Code
                </th>
                <th>
                    Result Code
                </th>
            </tr>
            <tr>
                <td style="width:60%;">
                    <pre>
                        <code>
&lt;?php

    $nilai1    = -3;
    $nilai2    = 3+5;
    $nilai3    = 8-4.5;
    $nilai4    = 2*5;
    $nilai5    = 3+8/5-3;
    $nilai6    = 10 % 4;
     
    echo "hasil1    ="; var_dump($nilai1);echo "<br />"; // hasil1 =int(-3) 
    echo "hasil2    ="; var_dump($nilai2);echo "<br />"; // hasil2 =int(8) 
    echo "hasil3    ="; var_dump($nilai3);echo "<br />"; // hasil3 =float(3.5) 
    echo "hasil4    ="; var_dump($nilai4);echo "<br />"; // hasil4 =int(10) 
    echo "hasil5    ="; var_dump($nilai5);echo "<br />"; // hasil5 =float(1.6) 
    echo "hasil6    ="; var_dump($nilai6);echo "<br />"; // hasil6 =int(2)
        
?&gt;
                        </code>
                    </pre>
                </td>
                <td style="text-align: center; vertical-align: middle;">
                    <div>
                        <?php

                        $nilai1    = -3;
                        $nilai2    = 3 + 5;
                        $nilai3    = 8 - 4.5;
                        $nilai4    = 2 * 5;
                        $nilai5    = 3 + 8 / 5 - 3;
                        $nilai6    = 10 % 4;

                        echo "hasil1    =";
                        var_dump($nilai1);
                        echo "<br />"; // hasil1 =int(-3) 
                        echo "hasil2    =";
                        var_dump($nilai2);
                        echo "<br />"; // hasil2 =int(8) 
                        echo "hasil3    =";
                        var_dump($nilai3);
                        echo "<br />"; // hasil3 =float(3.5) 
                        echo "hasil4    =";
                        var_dump($nilai4);
                        echo "<br />"; // hasil4 =int(10) 
                        echo "hasil5    =";
                        var_dump($nilai5);
                        echo "<br />"; // hasil5 =float(1.6) 
                        echo "hasil6    =";
                        var_dump($nilai6);
                        echo "<br />"; // hasil6 =int(2)
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>