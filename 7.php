<?php
echo '<pre>';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/vienaragiai/web_Mechanika/7.php');
    die;
};
if(isset($_GET['get'])) {
    echo '<body style="background-color: darkgreen"></body>';
    $_SERVER['REQUEST_URI'];
}
    if(isset($_POST['post'])){
    echo '<body style="background-color: greenyellow"></body>';
}
print_r( '<div>
        <form action="" method="get">
            <button name="get">GET</button>
        </form>
        <form action="" method="post">
            <button name="post">POST</button>
        </form>
      </div>'); ?>