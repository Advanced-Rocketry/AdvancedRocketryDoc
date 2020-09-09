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
    $title = 'Biome Scanner';

    $imageDemoName = 'biomeScanner_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The biome scanner is a multiblock structure that can build built on a space station to gather info about the planet the station is currently orbiting.  The biome scanner is only able to collect biome information however and simply lists what biomes have been found to generate on the planet below. It will list every biome that can be found on the planet, which with Advanced Rocketry on defaults will be no more than five. If it only displays one biome, such as with a Hot Dry Rock planet or a planet with regolith (A Moon planet), that is the only biome generated. Use this to find if you want to visit a planet or not, before you land on it with a rocket!</p>
    <p>If it is used while warping, rumor has it that it uses the language of the cosmos itself, though that claim was made by a sentient enchanting table.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'biomeScanner_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
