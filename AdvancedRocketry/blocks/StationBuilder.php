<?php
    $title = 'Station Builder';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/stationDockingPort_demo.jpg" /><h2 style="text-align: center;">Overview</h2><p>&nbsp;&nbsp;&nbsp;&nbsp;  The Station Builder is constructed in the same way as the <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>.  However, rather that build rockets, the Station Builder builds space station modules from the blocks placed on the pad.</p>
    <p>These modules can then be loaded onto a rocket and launched into orbit.</p>
    <br /><br /><hr><h2 style="text-align: center;"><img align="left" src="../img/stationBuilder_gui.png" />Usage</h2> <p>Like the <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>, the Station Builder\'s scan and build buttons scan and build the structure respectivly.</p>
    <p>To build a new station, a <a href="SatelliteHatch.php">Satellite Bay</a> must be placed in the top left slot and an unprogrammed station chip must be placed in the top right slot and a structure must be build on the pad.  Once these goals are met, a space station can be built.  At the start of the build process, the station chip and the Satellite Bay are consumed.  At the end of the build process, the structure on the pad is placed into a new station item that is placed in the bottom left slot and a station chip programmed with the coordinates of the new space station\'s orbit is placed in the bottom right slot.</p>
    <p>Before going to the space station, the space station must be launched into orbit.  This can be done by placing the station item into a satellite bay on a rocket and launching it.  The newly created station will be in orbit around the planet it was launched from.</p>
    <br />
    <h3>Station modules</h3>
    <p>Once a station is built, it is possible to use <a href="StationDockingPort.php">Station Docking Ports</a> to launch new module and attach them to the station.</p>
    <p>Building a station module follows the same process as building a station for the first time, the major difference is that instead of an unprogrammed station chip in the top right slot, a chip programmed with the id of the target station must be placed there instead.  When building a station module, the cip does not get consumed.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/rocketAssemblingMachine_block.png" /><hr>Hardness: 3<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
