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
    $title = 'Observatory';

    $imageDemoName = 'observatory_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Observatory is a large multiblock structure that is capable of peering out into the cosmos and pinpoint distant asteroid that may contain valuble materials.  It\'s primary function is to locate these distant objects and program their coordinates into asteroid chips.</p>
    <p>In order for the Obervatory to function, the structure must have at least one data bus with at least 100 distance data.  The Observatory must also be in a dark place with a clear view of the sky. This means that upon stations, you must rotate the station 180 degrees to be able to search for asteroids, as it will only ever be dark there.</p>
    <br><br><p>The Obervatory also has a maximum observable distance which is a hard requirement for detecting certain kinds of asteroids (see configuring asteroid types <a href="../config/AsteroidConfiguration.php">here</a>).  The maximum observable distance is determined by the type of <a href="Motors.php">motor</a> and glass used in construction of the multiblock structure.  Higher teir motors provide greater observable distances.  Exchanging the glass for lens blocks also increases the maximum observable distance.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'observatory_gui.png';
    $descriptionGUI ='<p>
    The first tab contains information about the structure such as amount of data stored in the machine, the observable distance, and amount of power stored.  The data indicators only appear if there\'s a data bus with that particular data type built into the structure.</p>
    <p>The power bar is on the far left and the on/off switch is on the top right.  The observable distance range is displayed on the bottom.
    </p>'; 
    
    $optionalSection = '<img align="left" src="../img/observatory_gui2.png"/><p>
    The second tab contains information about asteroid searches.  When first opened the Asteroids and Composition areas may be empty.  Clicking the scan button will initiate a scan for asteroids but will consume 100 distance data to do so.  Once a scan is completed the Asteroids panel will populate with observed asteroids.</p>
    <p>Clicking on an Asteroid will bring up information about the selected asteroid in the Composition panel.  The Composition panel will estimates of how much of what kind of ore is in the selected asteroid.  Having Composition and mass data in the observatory (up to 2000 each) will decrease the amount of uncertainty of each type of ore.
    </p>
    <p>To program an asteroid chip with the location of the selected asteroid, put an unprogrammed asteroid chip into the slot with the chip icon, then once you have the desired asteroid selected, click on the gears between the two slots.  Programming the chip will use 100 of the distance data in the observatory as well as 500RF of energy.</p>
    <p>Getting an enriched asteroid, one with iridium inside it, will likely take a couple scans, so make sure to have at least 300 extra distance data before attempting asteroid mining for the first time, or you may be stuck waiting for a few minutes while your satellites collect more data for you.</p>';
    
    $sidebarImage = 'observatory_block.png';
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
