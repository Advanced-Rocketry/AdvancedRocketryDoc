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
    $title = 'Holo-Projector';

    $imageDemoName = 'holoprojector_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Holo-Projector is a handheld hologram projecting device that allows you to see a projection of a selected structure to aid you in building of large machines.</p>
    <p>Shift-right clicking on the Holo-Projector opens up a gui which allows you to select the machine to project.  You can scroll up and down in this menu by using the scroll wheel on the mouse or middle clicking and dragging.  After selecting a machine by clicking on the button representing it, hovering over the holo-projector will display a list of required materials to build the machine.</p>
    
    <p>Once a machine is chosen from the interface described above, you can right click a spot on the ground to create a hologram of the machine.  Holding shift while scrolling with the holo-projector selected will move the cross section of the projected machine in-world.</p>
    <br/><p>Other features include: <ul><li>right clicking on a machine control block in world with the holo-projector will align the hologram to the machine</li><li>Middle clicking on a hologram will select the block represented by the hologram if you have it in your inventory</li></p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'items/holoProjector.png';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
