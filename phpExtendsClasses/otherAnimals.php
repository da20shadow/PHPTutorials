<?php
include ("_Rabbit.php");
?>
<div style="margin-left: 150px; font-size:21px;">
    <a href="extendingClasses.php">Back To Previews Page</a>
    <br>
    <?php
    //Creating Rabbit
    $rabbit = new Rabbit("Zaio","white",3);
    $rabbit->eat("meet");
    echo "<br>";
    $rabbit->eat("Carrot");

    echo "Has: " . $rabbit::getEyes() . " eyes.";
    ?>

</div>