<?php

global $link;
if (!empty($_POST["chowish"]) and !empty($_POST["upwish"]))  {

    $names = $_POST["chowish"];
    $name = $_POST["upwish"];
    $query = mysqli_query($link, "UPDATE `wishes` SET 'Name_wish' = $name WHERE 'Name_wish' = $names");

    header("Location: content.php");
    exit();
}
else {
    echo "<h1 align='center'>Ошбика обновления желания!</h1>";
}

