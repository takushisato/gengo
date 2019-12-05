<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>西暦から元号</title>
  </head>
  <body>
    <div class="container">
        <?php
        require_once('common.php');

        $seireki = $_POST['seireki'];
        $meijinengou = $seireki - 1867;
        $taisyounendo = $seireki - 1911;
        $syouwanengo = $seireki - 1925;
        $heiseinengo = $seireki - 1988;
        $reiwanengo = $seireki - 2018;

        function gengo($seireki) {
            if(1868<=$seireki && $seireki<=1911) {
                $gengo = '明治';
            }

            if(1912<=$seireki && $seireki<=1925) {
                $gengo = '大正';
            }

            if(1926<=$seireki && $seireki<=1988) {
                $gengo = '昭和';
            }

            if(1989<=$seireki && $seireki<=2018) {
                $gengo = '平成';
            }

            if(2019<=$seireki && $seireki<=2100) {
                $gengo = '令和';
            }

            return($gengo);
            }

        if($seireki == 1868) {
            $meijinengou = '元';
        }

        if($seireki == 1912) {
            $taisyounendo = '元';
        }

        if($seireki == 1926) {
            $syouwanengo = '元';
        }

        if($seireki == 1989) {
            $heiseinengo = '元';
        }

        if($seireki == 2019) {
            $reiwanengo = '元';
        }

        ?>

        <div class="gengo">
        <?php

        if($seireki < 1868 || $seireki > 2100) {
            print '適応外です。';
        } else {
            $wareki = gengo($seireki);
            print $wareki;

            if(1868<=$seireki && $seireki<=1911){
                print $meijinengou;
            } else if (1912<=$seireki && $seireki<=1925) {
                print $taisyounendo;
            } else if (1926<=$seireki && $seireki<=1988) {
                print $syouwanengo;
            } else if (1989<=$seireki && $seireki<=2018) {
                print $heiseinengo;
            } else if (2019<=$seireki && $seireki<=2100) {
                print $reiwanengo;
            }

            print '年';
        }
         ?>

        </div>
    </div>

  </body>
</html>
