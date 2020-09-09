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
    $title = 'Unmanned Vehicle Assembler';

    $imageDemoName = 'unmannedVehicleAssembler_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Unmanned Vehicle Assembler is a block that takes power in the form of RF to either scan or build a drone in a gantry.</p>
    <p>Because drones are launched from orbit, and are not designed to land, they have a reduced fuel requirement compared to standard rockets.</p>
    <br>
    <p>Other than construction, the usage of the Unmanned Vehicle Assembler is similar to the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>.</p>
    <p>Like the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>, infrastructure can be linked to drones through the Unmanned Vehicle Assembler using the <a href="../items/linker.php">Linking tool</a>.</p>
    <p>When the drones are launched, they will descent before travelling in the direction facing away from the Unmanned Vehicle Assembler.  In future builds, there may be an option to change the direction of launch.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'unmannedVehicleAssembler_demo2.gif';
    $descriptionGUI ='<p>Unlike the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>, the Unmanned Vehicle Assembler builds the craft horizontally instead of vertically.</p>
    <p>Once the Unmanned Vehicle Assembler is placed, <a href=./StructureTower.php>Structure Tower</a> blocks can be placed on the top and sides of the machine to determine the area in which to build the vehicle.</p>
    <br>
    <p>A bar must extend from the top of the vertical tower to determine the length of the area to build.</p>
    <p>The video to the left illistrates the effects of modifying the size of the gantry in various ways, where the white box indicates the valid building area for the machine.</p>'; 
    
    $sidebarImage = 'rocketAssemblingMachine_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='<b>Min Structure Size:</b><br>3x3x3<br /><b>Max Structure Size:</b><br>16x16x16';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
