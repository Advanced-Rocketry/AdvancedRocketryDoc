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
    $title = 'Black Hole Generator';

    $imageDemoName = 'blackHoleGen_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Black Hole Generator is a multi-block construction which creates power (rf) by siphoning the power of a black hole. Use the <a href="/AdvancedRocketry/1.12.2/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Black Hole Generator machine block.</p>
    <p>The generator consumes raw materials such as dirt, cobblestone, netherrack, stone and gravel through the input hatch. When the items are consumed by the black hole, the generator collects the increased power generating 500 rf/t. The generator must be on a <a href="C:\Users\jlaw\Documents\Advanced Rocketry\AdvancedRocketryDoc\AdvancedRocketry\1.12.2\blocks\StationBuilder.php">space station</a> orbiting a black hole. Don\'t fear, these black holes are stable and will not attempt to suck the player into it.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'blackHoleGen_block.png';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = '';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
