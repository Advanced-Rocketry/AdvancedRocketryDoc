<?php
    $title = 'Id Chips';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>Id chips, in general are used to link things together or identify things.</p>
    <ul>
    <li><b>Asteroid chips</b> are programmed and filled in the <a href="../blocks/Abdp.php">Astrobody data processor</a>.  Asteroid chips are primarily used in <a href="../concepts/Missions.php">Asteroid mining missions</a>.</li>
    <li><b>Planet ID chips</b> are used in a <a href="../concepts/Rockets.php">rocket\'s</a> guidance computer to keep track of the rocket\'s destination.  
    This chip can be programmed in a rocket by putting the chip into a guidance computer and clicking the <i>"Select DST"</i> button in the rocket\'s UI and selecting the planet from the resultant interface.</li>
    <li><b>Space Station ID chips</b> are used to set a rocket\'s destination to a space station (or if on a space station the planet the station is orbiting).  Space Station ID chips are also used in the <a href="../blocks/StationBuilder.php">station builder</a> for building station modules.</a></li>
    </ul>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/chipSeq.gif" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
