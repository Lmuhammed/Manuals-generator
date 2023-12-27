<?php
function NextUpdates() {
    
    echo "<p>تحديثات قادمة إن شاء الله</p>";
    echo "=========================================<br>";
    echo readfile("Includes/FeatureNextUpdate.txt");
    echo "<br>=========================================";

 }