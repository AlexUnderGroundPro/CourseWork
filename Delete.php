<?php
global $link;
if(!empty($_POST["inp1"])) {
    $name = $_POST["inp1"];
    $query = mysqli_query( $link,"INSERT INTO `wishes` WHERE `wishes`.`Name_wish` = $name");

    header("Location: content.php");
    exit();
}
else {
    echo"<h1 align='center'>Ошбика удаления желания!</h1>";}

?>