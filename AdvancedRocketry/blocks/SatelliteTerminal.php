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
    $title = '';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>YOUR TEXT HERE</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
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
    
    $title = 'Satellite Terminal';

    $imageDemoName = 'satelliteTerminal_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Satellite Terminal is used to interface with satellites that have been launched into orbit.  In order to interface with a satellite the Satellite Terminal must be placed on the planet the satellite orbits around OR a space station orbiting in the same system as the satellite.</p>
    <p>The Satellite Terminal draws a small amount of RF power when connected to a satellite to maintain the link.  If unpowered the Satellite Terminal will be unable to download data or interface with the satellite.</p>
    <p>Data can be automatically pulled from the satellite by connecting a data pipe to the Satellite Terminal.<p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'satelliteTerminal_gui.png';
    $descriptionGUI ='<p><h3>Data Buffer</h3>To the right of the power indicator is the data buffer which can store various types of data downloaded from satellites.  It is also possible to download data from the data buffer onto a <a href="../items/datachip.php">data storage unit</a> by putting  the chip into the IO inventory slot adjacent to the data amount indicator and clicking the arrows pointing to the slot.</p>
    <p>Data can also be extracted from the Satellite Terminal directly by using the <a href="Cables.php">data pipes</a>.  In the case of the internal buffer of the Satellite Terminal being empty with a connected satellite, the data cables will pull data directly from the satellite without requiring the user to hit the "connect" button.</p>
    <p><h3>Satellite info space</h3>The Empty space to the right of the data buffer will display information about the satellite when a satellite is accessible.  Errors connecting to the satellite will also appear here.</p>
    <p><h3>Satellite Management</h3>The inventory in the top right holds a programmed satellite ID chip containing the information of the satellite to connect to.  When connected it is possible to download data and view the satellite\'s properies.</p>
    <p>The "X" tab in the top right corner self destructs the the satellite stored in the satellite ID chip rendering the satellite permanently unusable!</p>
    <p>The connect button downloads data from the satellite and stores the data in the data buffer.</p>'; 
    
    $sidebarImage = 'satelliteTerminal_block.png';

    $hardness = 2;
    $blastResistance = 0;
    $requiresTool = 'Yes';
    $fullBlock = 'Yes';
    $sealable = 'Yes';
    $tileEntity = 'Yes';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
