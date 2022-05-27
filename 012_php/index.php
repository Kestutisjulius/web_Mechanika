<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document 012</title>
</head>
<body>
    <h1>Hello Kitty</h1>
    <a href="http://localhost/vienaragiai/web_Mechanika/012_php/?page=1">Page1</a>
    <a href="http://localhost/vienaragiai/web_Mechanika/012_php/?page=2">Page2</a>
    <a href="http://localhost/vienaragiai/web_Mechanika/012_php/?page=3">Page3</a>
    <?php
    // echo $_GET['count']; echo '<br>'; echo $_GET['color']
    if (isset($_GET['page'])){
        if ($_GET['page'] == 1){
            ?>
    <h1>puslapis! PIRMAS</h1> <?php
        }
        if ($_GET['page'] == 2){
            ?>
    <h1>puslapis! ANTRAS</h1> <?php
        }
        if ($_GET['page'] == 3){
            ?>
    <h1>puslapis! TRECIAS</h1> <?php
        }
    }
    ?>
</body>
</html>
