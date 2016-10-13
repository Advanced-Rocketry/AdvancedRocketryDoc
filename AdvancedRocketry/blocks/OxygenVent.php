<?php
    $title = 'Oxygen Vent';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/energyCable_demo.jpg" /><h2 style="text-align: center;">Overview</h2><p>&nbsp;&nbsp;&nbsp;&nbsp;  The Oxygen Vent can be placed in an area that is sealed and when running, will fill the area with air.  If the seal is broken then the air will immediatly escape out to the enviroment.</p>
    <p>All sides of the Oxygen Vent must be either facing a sealed area, or against a solid block in order to properly function.</p>
    <p>To run, the Oxygen Vent requires a source of power, a source of Oxygen, and a redstone signal.  The need for Oxygen can be eliminated by placing a <a href="OxygenScrubber.php">CO2 Scrubbers</a> with a Carbon Collection Cartridge on two sides of the Oxygen Vent.</p>
    <p>The amount of Oxygen can be reduced by using only one <a href="OxygenScrubber.php">CO2 Scrubber</a>.  The use of the carbon scrubbers increases power consumption of the Oxygen Vent, and the Carbon Cartridge needs to be changed periodically (once every 24 hours of constant use if the server isn\'t lagging).</p>
    <p>By default, the Oxygen Vent can only fill a square radius of 32 blocks.  However if the <italic>atmosphereCalculationMethod</italic> is set to use volume based calcuations, the Oxygen Vent can fill up to 32,768 cubic blocks.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/oxygenVent_block.png" /><hr>Hardness: 3<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
