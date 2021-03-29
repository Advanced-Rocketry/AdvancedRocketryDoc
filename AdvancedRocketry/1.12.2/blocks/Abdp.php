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
    $title = 'Astrobody Data Processor';

    $imageDemoName = 'abdp_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Astrobody Data Processor is essentially a computer that analyses data brought in from <a href="/AdvancedRocketry/1.12.2/items/satellite.php">satellites</a> and telescopes.  The purpose of this machine is to process data and program the analysed data into asteroid ID chips for use with asteroid mining missions.</p>
    <p>The Astrobody Data Processor can handle the three main data types and the data can either be loaded from a <a href="/AdvancedRocketry/1.12.2/items/datachip.php">data storage unit</a> or from <a href="WirelessTransciever.php">wireless transceivers</a>.</p>
    <p>The Astrobody Data processor is also responsible for completing the asteroid  ID chips.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'abdp_gui.png';
    $descriptionGUI ='<p><h3>Programming asteroid ID Chips</h3>
    The AstroBody Data Processor finishes up chips that have had an asteroid loaded onto them in an <a href="Observatory.php">observatory</a>. It takes 1000 of each of the three data types to fully complete an asteroid chip, which is always desireable because anything lower than 1000 can adversely affect the output of the mining mission.</p>
    <p>The input slot in the bottom left holds the asteroid ID chip to store data to.  The Astrobody Data Processor has three data buffers, one for Mass data, one for Distance Data, and one for Composition data.  Toggling the switches enables/disables programming of each data type.</p>
    <p>Because the Astrobody Data Processor is relatively slow and cannot be sped up with coils or motors, it is recommended to have multiple going at once if you plan to launch many asteroid mining missions, as data collection can vastly outpace a single Astrobody Data Processor</p>';
    
    $optionalSection='<p><h3>Automation</h3>
    The Astrobody data processor can be fully automated.  Unprogrammed asteroid ID chips inserted into the input hatch are automatically placed into the top right slot.  Programmed asteroid ID chips are automatically placed into the data write slot.  When an asteroid ID chip in the data write slot is full it is automatically moved to the output hatch as soon as room is available.</p>';            
        
    $sidebarImage = 'abdp_block.png';
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
