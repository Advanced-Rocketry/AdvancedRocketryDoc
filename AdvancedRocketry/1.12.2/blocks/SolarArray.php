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
    $title = 'Solar Array Panel';

    $imageDemoName = 'solarArrayPanel_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Yet another form of solar power, the Solar Array is a multiblock which accepts sunlight on top and on bottom allowing it to generate power even on space stations.  Use the <a href="/AdvancedRocketry/1.12.2/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Solar Array machine block.</p><p>The array is constructed of two power output hatches and require 63 solar array panels. Additionally, the solar array is more efficient and should be used in place of giant arrays of solar panel generators, to reduce lag and and fps drops.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'solarArray_block.png';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = '';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
