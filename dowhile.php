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

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
        
?&gt;
                        </code>
                    </pre>
                </td>
                <td style="text-align: center; vertical-align: middle;">
                    <div>
                        <?php
                        $x = 1;

                        do {
                            echo "The number is: $x <br>";
                            $x++;
                        } while ($x <= 5);
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>