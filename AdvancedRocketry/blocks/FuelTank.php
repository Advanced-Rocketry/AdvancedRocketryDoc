<?php
    $title = 'Fuel Tank';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/fuelTank_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp;Fuel Tanks are cylindrical 
    containers used to store rocket fuel onboard rockets.  Building fuel tanks into a rocket will increase the <a href="RocketAssemblingMachine.php#rocketStats">fuel storage capacity</a> of the rocket.</p>
    <p>If a fuel tank is placed on top of or underneath another fuel tank, then the tanks will merge to become one larger tank.</p>
    <p>Fuel tanks cannot merge sideways or diagonally.</p>
    <p>If multiple fuel tanks are present on the rocket the fuel tanks will provide the same amount of storage
    as one large fuel tank.</p><p>There are no penalties for number of fuel tanks or distance between a fuel tank and an <a href="RocketEngine.php">engine</a>.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/fuelTank_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Fuel Storage: 500mb';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
