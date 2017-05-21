<?php
    $title = 'Biome Scanner';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/biomeScanner_demo.jpg" /><p><center><h3>Overview</h3></center>
    The biome scanner is a MultiBlock structure that can build built on a space station to gather info about the planet the station is currently orbiting.  The biome scanner is only able to collect biome information however and simply lists what biomes have been found to generate on the planet below.</p>
    <p>If it is used while warping, rumor has it that it uses the language of the cosmos itself, though that claim was made by a sentient enchanting table.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/biomeScanner_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes <br />MultiBlock';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
