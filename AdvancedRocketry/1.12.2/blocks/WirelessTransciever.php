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
    $title = 'Wireless Transceiver';

    $imageDemoName = 'wirelessTransciever_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Wireless Transceiver replaces the <a href="Cables.php">data cable</a> and allows the player to move data from point A to point B over the air.  Both endpoints must be in the same dimension and both ends must be loaded for the data transfer to occur.  The Wireless Transceiver has an internal buffer of 100 data per type.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'wirelessTransciever_gui.jpg';
    $descriptionGUI ='<p>The Wireless Transceiver can be placed on any block that accepts a data connection.  The rear of the wireless Transceiver must be touching a valid data I/O port however.  Wireless Transceivers can be linked using the <a href="../AdvancedRocketry/1.12.2/items/Linker.php">Linker</a>.  At this point in time, each Transceiver can connect to only one other Transceiver otherwise the dataflow may be garbled and can become unpredictable.</p>
    <p>The <font color="#009900">power toggle</font> turns the Transceiver on and off.  Then the Wireless Transceiver is turned off, it will not emit nor accept any data from the remote Transceiver or the block its connected to.</p>
    <p>The <font color="#990000">extract</font> toggle button changes the device from accept mode to extract mode when activated.  In Extract mode, the Wireless Transceiver will pull data from the block it\'s connected to and send it to the remote Transceiver.  If both Transceivers in the same network are in extract mode, no data will be sent as the airwaves will be jammed.</p>'; 
    
    $sidebarImage = 'wirelessTransciever_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
