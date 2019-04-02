<?php
    $title = 'Beacon';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/beacon_demo.jpg" /><p><center><h3>Overview</h3></center>
    The Beacon is a fairly cheap multiblock structure that has several purposes.</p>
    <p>If Advanced Rocketry is configured in such a way that planets must be discovered before visiting them, then placing a beacon on a planet and activating it makes that planet visible to all players in the game.  Turning the beacon off will render the planet invisible again to players that have not discovered it.
    </p>
    <p>
    The beacon also has a secondary function of showing a waypoint when wearing the beacon finder goggles.  the waypoint only shows if the player is in the same world as the beacon though.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/beacon_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes <br /> MultiBlock';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
