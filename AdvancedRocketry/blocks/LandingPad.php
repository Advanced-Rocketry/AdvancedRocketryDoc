<?php
    $title = 'Docking Pad';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align="left" src="../img/dockingPad_demo.jpg" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;The Docking Pad can be placed on a space station to specify a landing location for rockets on space stations.</p>
    <p>If all the Docking Pads on a space station are full or reserved, then an incoming rocket will land at the origin.</p>
    <p>Infrastructure such as <a href="Hatches.php#rocket">Rocket loaders/unloaders</a>, fuel loaders, and <a href="RocketMonitoringStation.php">Rocket Monitoring Stations</a> can be connected to it using the <a href="../items/linker.php">linker</a>.</p>
    <br>
    <p>Any infrastructure block connected to the Docking Pad will be connected to any rocket than lands on the landing pad.</p>

    <hr>
    <h2><center>Usage</center></h2>
    <p>The coordinates of the Landing pad itself can be programmed into a linker.  If a linker programmed with the coords of landing pad is placed in the inventory of a different landing pad, then any rocket taking off from the pad containing the linker will travel to the pad programmed into the linker if there is nothing in the rocket\'s guidance computer.</p>
    <p>Putting a linker into a Docking Pad reserves the pad for use and will not allow incoming craft to land on it.  Using this ability and the redstone features of the infrastructure is it possible to automate cargo transport between worlds.</p>
    <p>Rockets can also be programmed to land on a given landing pad.  When a space station ID chip is in the rocket\'s guidance computer, then pressing the "select dst" button in the rocket\'s GUI will open a screen allowing selection of the desired landing pad.  Unless named in the landing pad\'s GUI, the landing pads will show up as locations in this menu.  If the landing pad is named, then the name will show up instead of the coordinate.';
    
    $infoBarContent = $title.'<hr><img src="../img/dockingPad_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
