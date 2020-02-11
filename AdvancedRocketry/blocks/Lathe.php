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
    $title = 'Lathe';

    $imageDemoName = 'lathe_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Lathe is a multi-block construction which allows for faster and cheaper construction of rods. The Lathe allows rods at a 2:1 from ingots, making the creation of machine structures much cheaper. Along with the Rolling Machine, it is one of the first machines you want to make, as it will decrease the costs of further machines significantly. Use the <a href="../items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Lathe machine block.</p><p>Items are inserted via the input hatch and the rods can be retrieved from the output hatch.</p>';
    
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

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
