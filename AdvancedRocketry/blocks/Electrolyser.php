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
    $title = 'Electrolyser';

    $imageDemoName = 'electrolyser_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Electrolyser is a multi-block construction which breaks down water into Hydrogen and Oxygen. Use the <a href="/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Electrolyser machine block.</p><p>Water is pumped into the input fluid hatch via water buckets or other fluid transport methods from other mods. The Hydrogen is pumped out on one side via the output fluid hatch, and Oxygen the other. One electrolyser, even with iridium coils, is not normally enough to sustain a medium sized all-oxygen pressurised room, and as such if you want to pressurise a room it is recommended you with install carbon scrubbing cartridges and scrubbers or you increase the amount of electrolysers you are running.</p>';
    
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
