<?php
    $title = 'Station Docking Port';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/stationDockingPort_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp;  The Station Docking Port is a block that essentially marks where a space station module should dock itself.</p>
    <p>Space station modules are built in the <a href="StationBuilder.php">Station builder</a> and once built, can be placed on a rocket and sent into orbit.</p>
    <p>To use the Station Docking port, place the first of the pair onto the space station and give it a unique name under "My Id".  This name will tell the other block where to dock.</p>
    <p>Next, you must build a station module using the <a href="StationBuilder.php">Station builder</a>.  In the module place the second Station Docking Port and in the "Target Id" slot, type the unique name of the Station Docking Port you want to connect to on the station.</p>
    <p>Once this is done, assemble the station module and launch it into orbit in a satellite bay.</p>
    <p>Upon reaching orbit, the module should dock with the other module on the space station, in the process, both docking modules will be destoryed.</p>
    <p>It is important to remeber that the station and the module with join in such a way that the clamp sides of both modules will face each other!</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/stationDockingPort_block.png" /><hr>Hardness: 3<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
