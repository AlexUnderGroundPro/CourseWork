<?php
global $link;
if(($_POST["number2"])==1) {
    $name = $_POST["number2"];
    echo  "<input class='inp' type='text' inputmode='kana-name' value=".$name['number2']." id='qwe2'>";

    header("Location: main.php");
    exit();
}
else {
    echo"<h1 align='center'>Ошбика!</h1>";}

?>