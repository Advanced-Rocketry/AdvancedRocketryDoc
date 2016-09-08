<?php
    $title = 'Docking Pad';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align="left" src="../img/dockingPad_demo.jpg" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;The Docking Pad can be placed on a space station to specify a landing location for rockets on space stations.</p>
    <p>If all the Docking Pads on a space station are full or reserved, then an incoming rocket will land at the origin.</p>
    <p>Infrastructure such as <a href="Hatches.php#rocket">Rocket loaders/unloaders</a>, fuel loaders, and <a href="RocketMonitoringStation.php">Rocket Monitoring Stations</a> can be connected to it using the <a href="../items/linker.php">linker</a>.</p>
    <br>
    <p>Any infrastructure block connected to the Docking Pad will be connected to any rocket than lands on the docking pad.</p>

    <p>The coordnites of the Docking pad itself can be programmed into a linker.  If a linker programmed with another docking pad is placed in the inventory of another docking pad then any rocket taking off from the pad will travel to the destination pad set in the linker if the rocket\'s guidance computer is empty.</p>
    <p>Putting a linker into a Docking Pad reserves the pad for use and will not allow incoming craft to land on it.</p>
    <p>Using this ability and the redstone features of the infrastructure is it possible to automate cargo transport between worlds.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/dockingPad_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
