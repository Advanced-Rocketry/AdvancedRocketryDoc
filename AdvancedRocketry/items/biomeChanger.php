<?php
    $title = 'Biome Changer Remote';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align=left src="../img/biomeChanger_demo.jpg" />
    <p>The Biome Changer Remote is used to interface with the Biome Changer Satellite.</p>
    <p>To use the Biome Changer Remote it must first be linked to a Biome Changing Satellite and the Satellite must be in orbit around the planet the Biome Changer Remote is to be used on.</p>
    
    <p> To construct a Biome Changer Satellite, the Biome Changer Remote must be in the ID Chip slot during the construction of a satellite in the <a href="../blocks/SatelliteAssemblingMachine.php">Satellite Assembling Machine</a>.</p>
    <p>Like the satellite Id chips, the Biome Changer Remote can have its satellite link copied to another Biome Changer Remote in the <a href="../blocks/SatelliteAssemblingMachine.php">Satellite Assembling Machine</a>.</p>
    <p>When multiple Biome Changer Remotes are linked to the same satellite, both the biome discoveries and the power pool are shared.</p>
    <p>When first constructed the Biome Changer Remote has no biomes stored in memory.  Biomes may be added to the satellite\'s memory a player must visit the biome he/she wants to add and shift right-click on the Biome Changer Remote and click "Scan Biome".</p>
    <p>In order to select the target biome, a player must open the interface by shift right-clicking and clicking on a biome from the list.  Then stand where you want to change the biome and right click the remote to transform a 20x20 area centered on the player.</p>
    <p>Note: The satellite itself requires power storage and a power supply, the satellite will pull up to 100RF/t at 10RF per block.</p>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/biomeChanger.png" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
