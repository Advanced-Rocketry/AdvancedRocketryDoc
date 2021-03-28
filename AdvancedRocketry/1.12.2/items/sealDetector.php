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
    $title = 'Seal Detector';

    $imageDemoName = '\items\sealDetector_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The seal detector is a tool which is used on blocks to determine if they are able to create a seal. Blocks which create a seal are able to keep oxygen from flowing through them, thus making them excellent building blocks for space stations and other non-breathable atmospheres. Blocks which do not create a seal will need <a href="\AdvancedRocketry\1.12.2\blocks\Seal.php">Pipe Seals</a> in order to be used on the exterior walls of structures in non-breathable atmospheres.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = '\items\sealDetector.png';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
