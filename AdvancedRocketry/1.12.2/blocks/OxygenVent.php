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
    $title = 'Oxygen Vent';

    $imageDemoName = 'energyCable_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Oxygen Vent can be placed in an area that is sealed and when running, will fill the area with air.  If the seal is broken then the air will immediatly escape out to the enviroment.</p>
    <p>All sides of the Oxygen Vent must be either facing a sealed area, or against a solid block in order to properly function.</p>
    <p>To run, the Oxygen Vent requires a source of power, a source of Oxygen, and a redstone signal.  The need for Oxygen can be eliminated by placing <a href="OxygenScrubber.php">CO2 Scrubbers</a> with a Carbon Collection Cartridge on at least two sides of the Oxygen Vent.</p>
    <p>The amount of Oxygen can also be reduced by using only one <a href="OxygenScrubber.php">CO2 Scrubber</a>(Though I\'m not sure why you\'d not just make two).  The use of the carbon scrubbers increases power consumption of the Oxygen Vent, and the Carbon Cartridge needs to be changed periodically (once every 24 hours of constant use if the server isn\'t lagging).</p>
    <p>By default, the Oxygen Vent can only fill a square radius of 32 blocks.  However if the <italic>atmosphereCalculationMethod</italic> is set to use volume based calcuations, the Oxygen Vent can fill up to 32,768 cubic blocks.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '3';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
