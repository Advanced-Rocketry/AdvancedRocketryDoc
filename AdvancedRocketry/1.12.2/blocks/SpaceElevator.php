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

    $imageDemoName = 'spaceElevator_demo.png';

    $description1 = '<p><font color="red">Warning! Currently the Space Elevator is broken!
    List of bugs:
    When entering the capsule, it may tell you that the space elevator is turned off but you can still use it (You cant disable it as it always comeback to off when trying to turning it on in the gui). You may need to press the on/off button at least once for it to transport you.</p>
    After the first use, the tether may disappears and never appear again (until you break the multiblock and build it again) or simply never appear.</p>
    When going down the space elevator, you will receive fall damage and possibly die because of it. Make sure to have fall damage immunity or jump off the capsule before it lands down and have a method to negate the fall damage.</font></p>';
    
    //USE <p></p> to make a new paragraph 
    '<p>The space elevator is a multiblock machine that allow you to move between a planet and its orbiting space station. Space elevators cannot transport players between two separate points on the same planet.</p>
    <p>Space Elevators require 100000RF on the sending pad to transport a player to his/her destination. In order to initiate the transport the player must stand on the capsule for 10 seconds.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'spaceElevator_gui.png';
    $descriptionGUI ='<p>In order to use the space elevator, you need to link the space elevators using the <a href="/AdvancedRocketry/1.12.2/items/linker.php">linker</a>, shift right-click the first elevator with the linker then shift right-click the second elevator to link them.</p>
    <p>Once you have linked the two space elevators, click "Summon Capsule" in the second space elevator to summon the capsule, enter it and wait 10s for it to move to the first space elevator and vice-verse.</p>';
    
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
