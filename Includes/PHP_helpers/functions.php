<?php
function NextUpdates() {
     echo "<p>تحديثات قادمة إن شاء الله</p>";
    echo readfile("Includes/FeatureNextUpdate.txt");
 }