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
    $title = 'Space Elevator';

    $imageDemoName = 'spaceElevator_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The space elevator is a multiblock machine that provides an endpoint with paired space elevators.  Space Elevators can only transport players between bodies in the same system such as a planet and an orbiting station, two stations orbiting the same planet, or a planet and its moon.  Space elevators cannot transport players between two seperate points on the same planet.</p>
    <p>Space Elevators require 50000RF on the sending pad to transport a player to his/her destination.  In order to initiate the transport the player must stand on the launching platform for 10 seconds.  A countdown and the destination will appear on the screen.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'spaceElevator_gui.png';
    $descriptionGUI ='<p>In order to use the space elevator, a space elevator chip must be placed in both the sending and recieving elevator.  The chips initially contain no destinations.  To add a destination to the chip, shift rightclick one space elevator with a <a href="../items/linker.php">linker</a> then shift rightclick the target elevator with the programmed linker.  If successful the coordinates of both elevators will be programmed into both chips.  It is possible to link more than two elevators together.</p>
    <p>Once you have at least one destination programmed into a space elevator, clicking on the "select dst" button will bring up a page with possible destinations.  Destinations in red are unreachable and destinations in green are availible for selection.</p>
    <p>Once you\'ve made sure you have a valid destination selected, make sure the machine is turned on and powered, then step onto the platform to initiate the launch.</p>'; 
    
    $sidebarImage = 'spaceElevator_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
