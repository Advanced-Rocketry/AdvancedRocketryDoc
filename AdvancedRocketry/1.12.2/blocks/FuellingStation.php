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
    $title = 'Fueling Station';

    $imageDemoName = 'fuellingStation_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The fuelling station is a block that pumps fuel stored in its internal tank into a linked <a href="/AdvancedRocketry/1.12.2/guides/Rockets.php">rocket</a>.  Doing this requires a small amount of power, 1RF/t.</p>
    <p>This block can accept buckets of rocket fuel piped in as items or via its GUI.  The Fuelling Station by default will output a redstone signal when the linked rocket is fully fuelled, however this behavior can be changed via the tap in the top right of the interface.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'fuellingStation_block.png';

    $hardness = '0';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Teir 1</b><br>Fuel Storage: 500mb';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
