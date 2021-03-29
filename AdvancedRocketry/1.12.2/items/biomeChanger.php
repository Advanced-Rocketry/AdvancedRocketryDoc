<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = 'Biome Changer Remote';

    $imageDemoName = 'biomeChanger_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Biome Changer Remote is used to interface with the Biome Changer Satellite.</p>
    <p>To use the Biome Changer Remote it must first be linked to a Biome Changing Satellite and the Satellite must be in orbit around the planet the Biome Changer Remote is to be used on.</p>
    
    <p> To construct a Biome Changer Satellite, the Biome Changer Remote must be in the ID Chip slot during the construction of a satellite in the <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteAssemblingMachine.php">Satellite Assembling Machine</a>.</p>
    <p>Like the satellite Id chips, the Biome Changer Remote can have its satellite link copied to another Biome Changer Remote in the <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteAssemblingMachine.php">Satellite Assembling Machine</a>.</p>
    <p>When multiple Biome Changer Remotes are linked to the same satellite, both the biome discoveries and the power pool are shared.</p>
    <p>When first constructed the Biome Changer Remote has no biomes stored in memory.  Biomes may be added to the satellite\'s memory a player must visit the biome he/she wants to add and shift right-click on the Biome Changer Remote and click "Scan Biome".</p>
    <p>In order to select the target biome, a player must open the interface by shift right-clicking and clicking on a biome from the list.  Then stand where you want to change the biome and right click the remote to transform a 20x20 area centered on the player.</p>
    <p>Note: The satellite itself requires power storage and a power supply, the satellite will pull up to 100RF/t at 10RF per block.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'items/biomeChanger.png';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
