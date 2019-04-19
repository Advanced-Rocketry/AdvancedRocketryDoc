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
    $title = 'Beacon';

    $imageDemoName = 'beacon_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Beacon is a fairly cheap multiblock structure that has several purposes.</p>
    <p>If Advanced Rocketry is configured in such a way that planets must be discovered before visiting them, then placing a beacon on a planet and activating it makes that planet visible to all players in the game.  Turning the beacon off will render the planet invisible again to players that have not discovered it.
    </p>
    <p>
    The beacon also has a secondary function of showing a waypoint when wearing the beacon finder goggles.  the waypoint only shows if the player is in the same world as the beacon though.
    </p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'beacon_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = '';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
