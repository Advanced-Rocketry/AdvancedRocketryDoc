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
    $title = 'Gas Charge Pad';

    $imageDemoName = 'gasChargePad_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Gas Charger provides an easy way for the player to fill their <a href="../items/modularSpaceSuit.php">modular space suit</a> with various gasses such as Oxygen and Hydrogen.';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'gasChargePad_gui.png';
    $descriptionGUI ='To use gas charge pad, fill the charge pad up with the gas you want to use, then stand on top of it.  The <font color="#009900">item slots</font> can be used to fill and empty gasses from the pad.'; 
    
    $sidebarImage = 'gasChargePad_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>