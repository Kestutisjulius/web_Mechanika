<?php
const URL = '/vienaragiai/web_Mechanika/rose.php';
if($_SERVER['REQUEST_URI'] == URL){
    header('Location: http://localhost/vienaragiai/web_Mechanika/pink.php');
    die;
}

echo '<body style="background-color: crimson"></body>';
