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
    $title = 'Docking Pad';

    $imageDemoName = 'dockingPad_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Docking Pad can be placed on a space station to specify a landing location for rockets on space stations.</p>
    <p>If all the Docking Pads on a space station are full or reserved, then an incoming rocket will land at the origin.</p>
    <p>Infrastructure such as <a href="Hatches.php#rocket">Rocket loaders/unloaders</a>, fuel loaders, and <a href="RocketMonitoringStation.php">Rocket Monitoring Stations</a> can be connected to it using the <a href="/AdvancedRocketry/1.12.2/items/linker.php">linker</a>.</p>
    <br>
    <p>Any infrastructure block connected to the Docking Pad will be connected to any rocket than lands on the landing pad.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='<p>The coordinates of the Landing pad itself can be programmed into a linker.  If a linker programmed with the coords of landing pad is placed in the inventory of a different landing pad, then any rocket taking off from the pad containing the linker will travel to the pad programmed into the linker if there is nothing in the rocket\'s guidance computer.</p>
    <p>Putting a linker into a Docking Pad reserves the pad for use and will not allow incoming craft to land on it.  Using this ability and the redstone features of the infrastructure is it possible to automate cargo transport between worlds.</p>
    <p>Rockets can also be programmed to land on a given landing pad.  When a space station ID chip is in the rocket\'s guidance computer, then pressing the "select dst" button in the rocket\'s GUI will open a screen allowing selection of the desired landing pad.  Unless named in the landing pad\'s GUI, the landing pads will show up as locations in this menu.  If the landing pad is named, then the name will show up instead of the coordinate.'; 
    
    $sidebarImage = 'dockingPad_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
