<?php
    $title = 'Small Plate Presser';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/launchPadDemo.png" /><p>&nbsp;&nbsp;&nbsp;&nbsp; A concrete block that serves as the base for the
    rocket assembly platform, which is constructed from Launch Pad blocks, <a href="StructureTower.php">Structure Tower Blocks</a>, and a <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>.</p>
    <p>When placed down next to another launch pad block, the textures will rearrange themselves to make the connection appear seamless.</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/launchPad_block.png" /><hr>Hardness: 2<br />Blast Resistance: 10<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: No';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
