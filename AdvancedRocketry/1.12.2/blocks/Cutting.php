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
    $title = 'Cutting Machine';

    $imageDemoName = 'cutting_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Cutting Machine\'s primary purpose is to cut silicon boules into silicon wafers and circuit plates into basic circuits. By default you get four circuits per plate, making them a relatively cheap but high-processing material. Use the <a href="/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Cutting machine block.</p><p>Additionally, it can cut logs into 6 planks instead of crafting them into 4. Use higher tier <a href="Coils.php".php">Coils</a> and <a href="/Motors.php">Motors</a> to increase performance.</p> ';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = '';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = '';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
