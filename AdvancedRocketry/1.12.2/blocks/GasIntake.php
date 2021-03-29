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
    $title = 'Gas Intake';

    $imageDemoName = 'unmannedVehicleAssembler_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The gas intake is built onto an <a href="UnmannedVehicleAssembler.php">unmanned vehicle</a> to harvest gas from gas giant planets. Pressurized tanks are also needed on the vehicle in order to store the gases and bring them back to the space station. See <a href="\AdvancedRocketry\1.12.2\guides\Missions.php#gasmining">Mission Control: Gas Harvesting Missions</a> for more information.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'gasIntake_block.png';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = '';
    $multiBlock = 'YES (vehicle)';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
