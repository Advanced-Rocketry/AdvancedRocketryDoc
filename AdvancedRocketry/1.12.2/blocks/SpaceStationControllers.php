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
    $title = 'Space Station Controllers';

    $imageDemoName = 'warpController_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>There are a number of blocks you can install on your space station to control various attributes of your station.</p>
    <p>
    <ul>
        <li>Orientation Controller: Allows you to rotate your space station to get the best view of the planet below.</li>
        <li>Altitude Controller: Allows you to set your station\'s altitude above the orbiting system.</li>
        <li>Station Gravity Controller: Allows you to set and monitor your station\'s gravity levels</li>
        <li>Planet Selector: Allows you to remotely set a planet destination for your warp controller.</li>
        <li>Holographic Planet Selector: Functions the same as the planet selector, but with a 3D holographic display.</li>
    <ul>
    </p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'warpController_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
