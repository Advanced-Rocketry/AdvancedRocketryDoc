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
    $title = 'Precision Laser Etcher';

    $imageDemoName = 'precision_etcher.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Precision Laser Etcher is a multi-block construction which creates basic and advanced circuits at a reduced cost. Use the <a href="/AdvancedRocketry/1.12.2/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Precision Laser Etcher machine block.</p><p>Materials can be supplied through the input hatch and the product retrieved from the output hatch. The structure require two power input plugs and both need to be powered for the machine to operate.';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = '';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
