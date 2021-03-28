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
    $title = 'ID Chips';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>ID chips, in general are used to link things together or identify things.</p>
    <ul>
    <li><b>Satellite ID chips</b> are linked to launched satellites for monitoring in the <a href="\AdvancedRocketry\1.12.2\blocks\SatelliteTerminal.php">Satellite Terminal</a>. They are programmed in the <a href="\AdvancedRocketry\1.12.2\blocks\SatelliteAssemblingMachine.php">Satellite Assembling Machine</a>. 
    <li><b>Asteroid ID chips</b> are programmed and filled in the <a href="/AdvancedRocketry/1.12.2/blocks/Abdp.php">Astrobody data processor</a>.  Asteroid chips are primarily used in <a href="/AdvancedRocketry/1.12.2/guides/Missions.php">Asteroid mining missions</a>.</li>
    <li><b>Planet ID chips</b> are put into a <a href="/AdvancedRocketry/1.12.2guides/Rockets.php">rocket\'s</a> guidance computer to keep track of the rocket\'s destination planet.  
    This chip can be programmed in a rocket by putting the chip into a guidance computer and clicking the <i>"Select DST"</i> button in the rocket\'s UI and selecting the planet from the resultant interface.</li>
    <li><b>Space Station ID chips</b> are used to set a rocket\'s destination to a space station (or if on a space station the planet the station is orbiting).  Space Station ID chips are also used in the <a href="/AdvancedRocketry/1.12.2/StationBuilder.php">station builder</a> for building station modules.</a></li>
    <li><b>Space Elevator ID chips</b> are used in the <a href="/AdvancedRocketry/1.12.2/blocks/SpaceElevator.php">Space Elevator</a> to store coordinates of other space elevators that have been programmed in with a linker.</li>
    </ul></p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'items/chipSeq.gif';
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
