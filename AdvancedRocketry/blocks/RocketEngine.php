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
    $title = 'Rocket Engine';

    $imageDemoName = 'rocketEngine_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Rocket Engine
    is a critical component in any functioning rocket.  This all-in-one engine/nozzle combo is perfect for igniting and then directing the hot gasses produced by combustion in a downwardly direction.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;When used in a rocket, the engine can produce <a href="RocketAssemblingMachine.php#rocketStats">thrust</a>, which is required to move the rocket upward, or at least a little less downward.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'rocketEngine_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b><h3>Teir 1</h3></b>Fuel Consumption: 1 mb/s<br />Thrust: 10N<br /><hr><b><h3>Teir 2</h3></b>Fuel Consumption: 2<br />Thrust: 50N';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
