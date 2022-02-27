<?php
include ("_Wolf.php");
?>
<div style="margin-left: 150px; font-size:21px;">
    <a href="otherAnimals.php">Go To Other Page</a>
    <br>
    <?php
    //Creating dog
    $dog = new Dog("Jack","White and Black",25);
    $dog->eat("Carrot");
    echo "<br>";
    $dog->eat("Meet");
    echo "<br>";
    $dog->bark(); //Call Dog to bark and get bow bow
    echo "<br>";

    //Creating wolf
    $wolf = new Wolf("Bql Zub","gray",33);
    $wolf->bark(); //Call wolf to bark and get Auuuu (overridden function)
    echo "Has: " . $wolf::getEyes() . " eyes.";
    var_dump($wolf instanceof Animal);
    ?>

</div>