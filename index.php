<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web mechanika[$_GET] </title>
</head>
<?php
$red = "style='background-color: red;'>";


?>
<body <?php
//$_GET['color'] == 1 ? print_r($red) : null;
//$clr = $_GET['RGB'];
$clr2 = $_GET['txt'];
$style = "style='background-color: #{$clr2};'>";

print_r($style);
 ?>
    <a href="http://localhost/vienaragiai/web_Mechanika/">Home</a>
    <a href="http://localhost/vienaragiai/web_Mechanika/?color=1">Color</a>

    <form action="" method="get">
        RGB: <input type="text" name="txt">
        <button type="submit">GO</button>

    </form>
</body>



</html>
<?php
/** Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save.
 * Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu
 * perduodamu kintamuoju color=1.
 * Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai,
 * o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.
 */
