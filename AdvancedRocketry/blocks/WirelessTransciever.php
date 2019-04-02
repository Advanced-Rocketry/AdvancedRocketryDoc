<?php
    $title = 'Wireless Transciever';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/wirelessTransciever_demo.jpg" /><p><center><h2>Overview</h2></center>&nbsp;&nbsp;&nbsp;&nbsp;
    The Wireless Transciever replaces the <a href="Cables.php">data cable</a> and allows the player to move data from point A to point B over the air.  Both endpoints must be in the same dimension and both ends must be loaded for the data transfer to occur.  The Wireless Transciever has an internal buffer of 100 data per type.
    <br><br><br><br><hr>
    <h2><center>Usage</center></h2>
    <img align="left" src="../img/wirelessTransciever_gui.jpg" />The Wireless Transciever can be placed on any block that accepts a data connection.  The rear of the wireless Transciever must be touching a valid data I/O port however.  Wireless Transcievers can be linked using the <a href="../items/Linker.php">Linker</a>.  At this point in time, each Transciever can connect to only one other Transciever otherwise the dataflow may be garbled and can become unpredictable.</p>
    <p>The <font color="#009900">power toggle</font> turns the Transciever on and off.  Then the Wireless Transciever is turned off, it will not emit nor accept any data from the remote Transciever or the block its connected to.</p>
    <p>The <font color="#990000">extract</font> toggle button changes the device from accept mode to extract mode when activated.  In Extract mode, the Wireless Transciever will pull data from the block it\'s connected to and send it to the remote Transciever.  If both Transcievers in the same network are in extract mode, no data will be sent as the airwaves will be jammed.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/wirelessTransciever_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
