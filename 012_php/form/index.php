<?php
session_start();
print_r($_SESSION);
/** aplications-cookies */
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!file_exists(__DIR__.'/test.json')){
            file_put_contents(__DIR__.'/test.json', json_encode([]));
        }
        $readJson = json_decode(file_get_contents(__DIR__.'/test.json'));
        $readJson[]= $_POST['iname'];
        file_put_contents(__DIR__.'/test.json', json_encode($readJson));

        header('Location: http://localhost/vienaragiai/web_Mechanika/012_php/form/');
        die;
    }
    session_abort();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
    <form method="post" name="fname" action=""> <!-- action = adresas kur siusti -->
        Tavo tekstas: <input type="text" name="iname">
        <button type="submit">GO</button>
    </form>
</body>
</html>
