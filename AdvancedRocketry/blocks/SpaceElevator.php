<?php
    $title = 'Space Elevator';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/spaceElevator_demo.jpg" /><p><center><h3>Overview</h3></center>
    The space elevator is a multiblock machine that provides an endpoint with paired space elevators.  Space Elevators can only transport players between bodies in the same system such as a planet and an orbiting station, two stations orbiting the same planet, or a planet and its moon.  Space elevators cannot transport players between two seperate points on the same planet.</p>
    <p>Space Elevators require 50000RF on the sending pad to transport a player to his/her destination.  In order to initiate the transport the player must stand on the launching platform for 10 seconds.  A countdown and the destination will appear on the screen.</p>
    <hr>
    <img align="left" src="../img/spaceElevator_gui.png" /><p><center><h3>Usage</h3></center>
    <p>In order to use the space elevator, a space elevator chip must be placed in both the sending and recieving elevator.  The chips initially contain no destinations.  To add a destination to the chip, shift rightclick one space elevator with a <a href="../items/linker.php">linker</a> then shift rightclick the target elevator with the programmed linker.  If successful the coordinates of both elevators will be programmed into both chips.  It is possible to link more than two elevators together.</p>
    <p>Once you have at least one destination programmed into a space elevator, clicking on the "select dst" button will bring up a page with possible destinations.  Destinations in red are unreachable and destinations in green are availible for selection.</p>
    <p>Once you\'ve made sure you have a valid destination selected, make sure the machine is turned on and powered, then step onto the platform to initiate the launch.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/spaceElevator_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes <br /> MultiBlock<br />';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
