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
        $adelante=false;
        $str = 'a';
        $n = 10;
        $m = 10;
        $submari = [rand(1,10)=>rand(1,10)];
        foreach($submari as $y => $x){
        }
        $nu = [1 => [0,0,0,0,0,0,0,0,0,0], 
        2 => [0,0,0,0,0,0,0,0,0,0],
        3 => [0,0,0,0,0,0,0,0,0,0],
        4 => [0,0,0,0,0,0,0,0,0,0],
        5 => [0,0,0,0,0,0,0,0,0,0],
        6 => [0,0,0,0,0,0,0,0,0,0],
        7 => [0,0,0,0,0,0,0,0,0,0],
        8 => [0,0,0,0,0,0,0,0,0,0],
        9 => [0,0,0,0,0,0,0,0,0,0],
        10 => [0,0,0,0,0,0,0,0,0,0]];
        /*array_push($nu,0=>);
        array_push($nu[0], 4);
        echo "1";
        for($y=0;$y<=$m;$y++){
            //array_push($nu, $y);
            echo "2";
            for($l=0;$l<=$m;$l++){
                echo "3";
                array_push($nu[$y],$l);
                echo "4";
            }

        }*/
        while($adelante){

        }
        $nu[rand(1,10)][rand(1,10)]=1;
        echo var_dump($nu);
        for($h=0;$h<=$m;$h++){
        echo "<tr>";
        for($i=0;$i<=$n;$i++){
            $d = $h + $i;
            if($h==0 && $i==0){
                echo "\t\t<td> &nbsp </td>\n";
                
            }else{
                if($h==0){
                echo "\t\t<td> $d </td>\n";
                }
                if($i==0){
                    echo "\t\t<td> $str </td>\n";
                    ++$str;
                }
                if($h!=0 && $i!=0){
                    if($h==$y && $i==$x){
                        echo "\t\t<td> X </td>\n";
                    }
                    else if($x-1!=0 && $y==$h && $x == $i+1){
                        echo "\t\t<td> X </td>\n";
                    }
                    else if($x-1==0 && $x+1!=11 && $y==$h && $x == $i-1){
                        echo "\t\t<td> X </td>\n";
                    }
                    else{
                    echo "\t\t<td> &nbsp </td>\n";}
                }
            }
        }
        echo "  </tr>";
    }
        ?>

    </table>
</body>

</html>