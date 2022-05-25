<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/vienaragiai/web_Mechanika/rose.php');
    die;
}
echo '<body style="background-color: pink">
    <form method="post">
    <button type="submit">GO TO ROSE</button>
</form>
</body>';
