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
    $title = 'Station Docking Port';

    $imageDemoName = 'stationDockingPort_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Station Docking Port is a block that essentially marks where a space station module should dock itself.</p>
    <p>Space station modules are built in the <a href="StationBuilder.php">Station builder</a> and once built, can be placed on a rocket and sent into orbit.</p>
    <p>To use the Station Docking port, place the first of the pair onto the space station and give it a unique name under "My Id".  This name will tell the other block where to dock.</p>
    <p>Next, you must build a station module using the <a href="StationBuilder.php">Station builder</a>.  In the module place the second Station Docking Port and in the "Target Id" slot, type the unique name of the Station Docking Port you want to connect to on the station.</p>
    <p>Once this is done, assemble the station module and launch it into orbit in a satellite bay.</p>
    <p>Upon reaching orbit, the module should dock with the other module on the space station, in the process, both docking modules will be destoryed.</p>
    <p>It is important to remeber that the station and the module with join in such a way that the clamp sides of both modules will face each other!</p></p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'stationDockingPort_block.png';

    $hardness = '3';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
