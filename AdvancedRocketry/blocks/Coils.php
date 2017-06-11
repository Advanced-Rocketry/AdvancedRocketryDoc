<?php
    $title = 'Coils';
    
    $mainContent = '<h1>'.$title.'</h1><hr>
    <img align="left" src="../img/coil_demo.jpg" /><h2><center>Overview</center></h2>
    <p>Coils are used in the construction of multiblock machines throughout the mod.  Coils also come in several teirs, higher teir coils being more powerful, but more expensive to make.</p>
    <p>The primary usage of coils is in the <a href="ElectricArcFurnace.php">Electric Arc Furnace</a>.  Using higher teir coils in some machines can decrease the amount of time required for a recipe.  Like the motors, the speed increases stack multiplicitivly.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/coil_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: No<hr><center>Other Coils</center><br />Speed Multiplier: 1x<hr><center>Gold Coil</center><br />Speed Multiplier: 1.11x<hr><center>Aluminum Coil</center><br />Speed Multiplier: 1.25x<hr><center>Titanium Coil</center><br />Speed Multiplier: 1.33x<hr><center>Iridium Coil</center><br />Speed Multiplier: 2x';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
