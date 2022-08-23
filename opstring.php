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

    $a = "Smart";
    $b = "DevTala";
    echo "Variabel \$a : = ".$a."\n";
    echo "Variabel \$b : = ".$b."\n\n";
    #menggunakan Operator
    $c = $a.$b;
    echo "Menggunakan operator titik (.) = ".$c."\n";
    #menggunakan operator .=
    $a .=$b;
    echo "Menggunakan operator titik sama dengan (.=) variabel \$a = ".$a."\n\n";
        
?&gt;
                        </code>
                    </pre>
                </td>
                <td style="text-align: center; vertical-align: middle;">
                    <div>
                        <?php

                        $a = "Smart";
                        $b = "DevTala";
                        echo "Variabel \$a : = " . $a . "\n";
                        echo "Variabel \$b : = " . $b . "\n\n";
                        #menggunakan Operator
                        $c = $a . $b;
                        echo "Menggunakan operator titik (.) = " . $c . "\n";
                        #menggunakan operator .=
                        $a .= $b;
                        echo "Menggunakan operator titik sama dengan (.=) variabel \$a = " . $a . "\n\n";

                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>