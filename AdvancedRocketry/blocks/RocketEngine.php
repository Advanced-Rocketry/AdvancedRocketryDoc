<?php
    $title = 'Rocket Engine';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/rocketEngine_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp; The Rocket Engine
    is a critical component in any functioning rocket.  This all-in-one engine/nozzle combo is perfect for igniting and then directing the hot gasses produced by combustion in a downwardly direction.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;When used in a rocket, the engine can produce <a href="RocketAssemblingMachine.php#rocketStats">thrust</a>, which is required to move the rocket upward, or at least a little less downward.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/rocketEngine_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center><h3>Teir 1</h3></center><br />Fuel Consumption: 1 mb/s<br />Thrust: 10N<br /><hr><center><h3>Teir 2</h3></center><br />Fuel Consumption: 2<br />Thrust: 50N';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
