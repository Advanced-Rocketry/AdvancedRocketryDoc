<?php
    $title = 'Astrobody Data Processor';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/abdp_demo.jpg" />
    <center><h2>Overview</h2></center>
    The Astrobody Data Processor is essentially a computer that analyses data brought in from <a href="../items/satellite.php">satellites</a> and telescopes.  The purpose of this machine is to process data and program the analysed data into asteriod ID chips for use with asteroid mining missions.</p>
    <p>The Astrobody Data Processor can handle the three main data types and the data can either be loaded from a <a href="../items/datachip.php">data storage unit</a> or from <a href="Cables.php">data cables</a>.</p>
    <p>The Astrobody Data processor is also responsible for initiallizing the asteroid  ID chips.</p>
    <hr><img align="left" src="../img/abdp_gui.png" />
    <center><h2>Usage</h2></center>
    <p><h3>Programming asteroid ID Chips</h3>
    The Slot on the top right is the input slot for unprogrammed asteroid ID chips.  Placing an unprogrammed asteriod ID chip in this slot and clicking the gear icon will begin programming the chip.  The programmed asteriod ID chip will be placed in the output hatch if there is room, or the output slot underneath the gears if the output hatch is full.</p>
    <p>The input slot in the bottom left holds the asteriod ID chip to store data to.  The Astrobody Data Processor has three data buffers, one for Mass data, one for Distance Data, and one for Composition data.  Toggling the switches enables/disables programming of each data type.</p>
    <p><h3>Automation</h3>
    The Astrobody data processor is also fully automatable.  Unprogrammed asteroid ID chips inserted into the input hatch are automatically placed into the top right slot.  Programmed asteriod ID chips are automatically placed into the data write slot.  When an asteroid ID chip in the data write slot is full it is automatically moved to the output hatch as soon as room is availible.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/abdp_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
