<a href="index1.html">Домашняя страница<a/></br>
<?php
    session_start();
    unset($_SESSION["user"]);
    echo "Вы вышли"
?>
