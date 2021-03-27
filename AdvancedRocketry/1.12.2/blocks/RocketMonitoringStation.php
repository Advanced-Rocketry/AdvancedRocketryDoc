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
    $title = 'Rocket Monitoring Station';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Rocket Monitoring Station is used to remotely launch and monitor the progress of any rocket, manned or unmanned.  The Rocket Monitoring Station is actually <b>required</b> to launch unmanned rockets.  The Rocket Monitoring Station can be linked by shift-right clicking on a Rocket Monitoring Station with the linking tool (TODO:ADD LINK) then right-clicking on the rocket with the same linking tool.  Although the Monitoring Station technically allows unlimited range, if the chunk containing the rocket is not loaded then attempting to launch the rocket will have no effect.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'monitoringStation_gui.png';
    $descriptionGUI ='<p>The Altitude bar ("ALT") depicts the linked rocket\'s current altitude with respect to the bottom of the world, and the altitude required to reach orbit.</p>
    <p>The Velocity indicator ("VEL") depicts the linked rocket\'s velocity, where the center is defined as zero.</p>
    <p>The Fuel bar depicts the amount of fuel currently stored in the linked rocket.</p><p>The launch button attempts to launch the linked rocket.</p>
    <p>The mission progress bar on the bottom displays how much progress is made in the current mission if available.</p>
    <p>The Rocket Monitoring Station by default will launch a rocket when given a redstone signal on the block.  The redstone behavior tab in the top right corner of the interface allows a player to choose whether the monitoring station should launch the rocket when a signal is applied, when a signal is removed, or to just ignore redstone entirely.</p>'; 
    
    $sidebarImage = 'monitoringStation_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='<b>Range:</b> Unlimited';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
