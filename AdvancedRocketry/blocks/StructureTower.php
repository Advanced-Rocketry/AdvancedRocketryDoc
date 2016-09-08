<?php
    $title = 'Structure Tower';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/structureTowerDemo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp; Made from Steel rods, the Structure Tower defines the vertical distance for a <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>, which is constructed from <a href="LaunchPad.php">Launch Pad blocks</a>, Structure Tower Blocks, and the machine itself.</p>
    <p>Structure Towers are also used to define the size of the area for the <a href="UnmannedVehicleAssembler.php">Unmanned Vehicle Assembler</a> to use.</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/structureTower_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: No<br />Tile Entity: No';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
