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

    $imageDemoName = 'abdp_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Astrobody Data Processor is essentially a computer that analyses data brought in from <a href="../items/satellite.php">satellites</a> and telescopes.  The purpose of this machine is to process data and program the analysed data into asteriod ID chips for use with asteroid mining missions.</p>
    <p>The Astrobody Data Processor can handle the three main data types and the data can either be loaded from a <a href="../items/datachip.php">data storage unit</a> or from <a href="Cables.php">data cables</a>.</p>
    <p>The Astrobody Data processor is also responsible for initiallizing the asteroid  ID chips.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'abdp_gui.png';
    $descriptionGUI ='<p><h3>Programming asteroid ID Chips</h3>
    The Slot on the top right is the input slot for unprogrammed asteroid ID chips.  Placing an unprogrammed asteriod ID chip in this slot and clicking the gear icon will begin programming the chip.  The programmed asteriod ID chip will be placed in the output hatch if there is room, or the output slot underneath the gears if the output hatch is full.</p>
    <p><i>Please note that the above has changed in the 1.1.x builds, the chips are now programmed in the <a href="Observatory.php">observatory</a>.</i></p>
    <p>The input slot in the bottom left holds the asteriod ID chip to store data to.  The Astrobody Data Processor has three data buffers, one for Mass data, one for Distance Data, and one for Composition data.  Toggling the switches enables/disables programming of each data type.</p>
    
    <p><h3>Automation</h3>
    The Astrobody data processor is also fully automatable.  Unprogrammed asteroid ID chips inserted into the input hatch are automatically placed into the top right slot.  Programmed asteriod ID chips are automatically placed into the data write slot.  When an asteroid ID chip in the data write slot is full it is automatically moved to the output hatch as soon as room is availible.</p>'; 
    
    $sidebarImage = 'abdp_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
