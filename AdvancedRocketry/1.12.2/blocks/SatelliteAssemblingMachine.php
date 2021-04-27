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
    $title = 'Satellite Builder';

    $imageDemoName = 'satelliteAssemblingMachine_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Satellite Builder build constructs Satellites from components documented <a href="/AdvancedRocketry/1.12.2/items/satellite.php">here</a>.</p>
    <p>Note: In order to build the Satellite Builder it must be placed on top of an input plug.</p>
    <p>There are five types of satellites that can be made, satellites with any one of these scanners used for asteroid prospecting: Distance, Mass, or Composition, satellites with an Ore Mapper to allow for planetary ore prospecting, and lastly satellites with microwave transmitters to allow power generation with the <a href="MicrowaveReciever.php">Microwave Receiver</a></p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'SatelliteBuild_gui.png';
    $descriptionGUI ='<p>The <font color="#8F8F00">Main Component</font> slot is where the main Component of a Satellite goes and determines the type of Satellite to be built.</p>
    <p>The <font color="red">Component</font> slot is where the different components for the satellite goes and determines aspects like energy and data storage capacities.</p>
    <p>The <font color="#009900">ID chip</font> slot is where a satellite ID chip must be placed in order to program it with the satellite\'s ID number so it can be used once placed in orbit.</p>
    <br>
    <p>The if a blank satellite, planet id, or station ID chip is placed in the <font color="purple">copy</font> slot and a non-blank chip of the same kind is placed in the <font color="#009900">ID chip</font> slot, a copy can be made by pressing the green copy button on the far right of the GUI.</p>
    <p>The <font color="#009090">output</font> slot is where either the finished satellite or the copied chip is stored.</p>'; 
    
    $sidebarImage = 'satelliteAssemblingMachine_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='<b>Structure Size:</b><br>1x2x1';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
