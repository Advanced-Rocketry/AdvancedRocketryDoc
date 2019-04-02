<?php
    $title = 'Rocket Monitoring Station';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/monitoringStation_gui.png" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;The Rocket Monitoring Station is used to remotely launch and monitor the progress of any rocket, manned or unmanned.  The Rocket Monitoring Station is actually <b>required</b> to launch unmanned rockets.  The Rocket Monitoring Station can be linked by shift-rightclicking on a Rocket Monitoring Station with the linking tool (TODO:ADD LINK) then right-clicking on the rocket with the same linking tool.  Although the Monitoring Station technically allows unlimited range, if the chunk containing the rocket is not loaded then attempting to launch the rocket will have no effect.</p>
    <p>The Altitude bar ("ALT") depicts the linked rocket\'s current altitude with respect to the bottom of the world, and the altitude required to reach orbit.</p>
    <p>The Velocity indicator ("VEL") depicts the linked rocket\'s velocity, where the center is defined as zero.</p>
    <p>The Fuel bar depicts the amount of fuel currently stored in the linked rocket.</p><p>The launch button attempts to launch the linked rocket.</p>
    <p>The mission progress bar on the bottom displays how much progress is made in the current mission if avalible.</p>
    <p>The Rocket Monitoring Station by default will launch a rocket when given a redstone signal on the block.  The redstone behavior tab in the top right corner of the interface allows a player to choose whether the monitoring station should launch the rocket when a signal is applied, when a signal is removed, or to just ignore redstone entirely.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/monitoringStation_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<hr>Range: unlimited';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
