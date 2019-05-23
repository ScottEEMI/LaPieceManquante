<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>DRCL xp</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>
    <div class="main-container">
        <div class="container">
            <img onclick="stopCount()" id="style-img" src="img/logo.png" alt="">
        </div>
        <div class="container text">
            <p>1 TWEET</p>&nbsp<p class="pink">#DORCELCHALLENGE</p>&nbsp<p>= 1</p>&nbsp<p class="pink">MINUTE OFFERTE</p>&nbsp<p>POUR TOUS</p>
        </div>
        <div class="container imp">
            <div id="compt" class="pink">
                <!-- compteur -->
            </div>
            <div class="imp_txt">
                <p>minutes<br>collectées</p>
            </div>
        </div>
    </div>

    <?php
    while (!$a) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://gb668l4kf0.execute-api.eu-west-3.amazonaws.com/prod",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_HTTPHEADER => array(
            "x-api-key: jWpyJOeBuR34Sr4ANmehL7aFLIhI9lJ05SMzQsTx"
          ),
        ));

        $count = curl_exec($curl);

        curl_close($curl);
        set_time_limit(30);
        $a+=1;
        }
    ?>

    <script type="text/javascript">
        var count = `<?php echo $count ?>`;
        count = count.replace('{"count":', '');
        count = count.replace('}', '');
        count = parseInt(count, 10)
        document.getElementById("compt").innerHTML = count;
        var c = 0;
        var t;
        var timer_is_on = 0;
    </script>

</body>

</html>
