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
    $title = 'Rocket Loaders/Unloaders';

    $imageDemoName = 'hatch_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Loaders and Unloaders are used to load/unload fluids and items from the rocket.</p><p>They can be linked directly to a rocket, a rocket assembler, or Docking Pad using a <a href="/AdvancedRocketry/1.12.2/items/linker.php">Linking tool</a>.</p>
    <p>When linked to a Docking Pad or rocket assembler, any rocket that lands on the Docking Pad or on the landing pad will automatically be linked to the loaders and they will automatically unload/load their payload.</p></p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'hatch_block.gif';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Tier 1</b><br />Number of slots: 4';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
