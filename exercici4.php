<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title></title>
    <style type="text/css">
        table, td {
            border: 1px black solid;
            border-collapse: collapse;
        }

    </style>
</head>
<body>
    <h1>EXercici 1</h1>
    <table>
        <?php
        $str = 'a';
        $n = 7;
        $m = 4;
        for($h=0;$h<=$m;$h++){
        echo "<tr>";
        for($i=0;$i<=$n;$i++){
            $d = $h + $i;
            if($d==0 && $i==0)
            echo "\t\t<td> $d </td>\n";
        }
        echo "  </tr>";
    }
        ?>

    </table>
</body>

</html>