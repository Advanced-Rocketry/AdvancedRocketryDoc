<?php
    $title = 'Fuelling Station';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/fuellingStation_demo.jpg" /><center><h2>Overview</h2></center><p>The fuelling station is a block that pumps fuel stored in its internal tank into a linked <a href="../concepts/Rockets.php">rocket</a>.  Doing this requires a small amount of power, 1RF/t.</p>
    <p>This block can accept buckets of rocket fuel piped in as items or via its GUI.  The Fuelling Station by default will output a redstone signal when the linked rocket is fully fuelled, however this behavior can be changed via the tap in the top right of the interface.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/fuellingStation_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Fuel Storage: 500mb';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
