<?php
    $title = 'Id Chips';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>Id chips, in general are used to link things together or identify things.</p>
    <ul>
    <li>Asteroid chips are programmed and filled in the <a href="../blocks/Abdp.php">Astrobody data processor</a>.  Asteroid chips are primarily used in <a href="../concepts/Missions.php">Asteroid mining missions</a>.</li>
    <li>Planet ID chips are used in a <a href="../concepts/Rockets.php">rocket\'s</a> guidance computer to keep track of the rocket\'s destination.</li>
    <li>Space Station ID chips are used to set a rocket\'s destination to a space station (or if on a space station the planet the station is orbiting).  Space Station ID chips are also used in the <a href="../blocks/StationBuilder.php">station builder</a> for building station modules.</a></li>
    </ul>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/chipSeq.gif" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
