<?php
    $title = 'Observatory';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/observatory_demo.jpg" /><p><center><h3>Overview</h3></center>
    The Observatory is a large multiblock structure that is capable of peering out into the cosmos and pinpoint distant asteroid that may contain valuble materials.  It\'s primary function is to locate these distant objects and program their coordinates into asteroid chips.</p>
    <p>In order for the Obervatory to function, the structure must have at least one data bus with at least 100 distance data.  The Observatory must also be in a dark place with a clear view of the sky.</p>
    <br><br><p>The Obervatory also has a maximum observable distance which is a hard requirement for detecting certain kinds of asteroids (see configuring asteroid types <a href="../config/AsteroidConfiguration.php">here</a>).  The maximum observable distance is determined by the type of <a href="Motors.php">motor</a> and glass used in construction of the multiblock structure.  Higher teir motors provide greater observable distances.  Exchanging the glass for lens blocks also increases the maximum observable distance.</p>
    <hr>
    <div style="max-width: 300px"><img align="left" src="../img/observatory_gui.png" /><img align="left" src="../img/observatory_gui2.png" /></div><p><center><h3>Usage</h3></center>
    <p>
    The first tab contains information about the structure such as amount of data stored in the machine, the observable distance, and amount of power stored.  The data indicators only appear if there\'s a data bus with that particular data type built into the structure.</p>
    <p>The power bar is on the far left and the on/off switch is on the top right.  The observable distance range is displayed on the bottom.
    </p>
    <p>
    The second tab contains information about asteroid searches.  When first opened the Asteroids and Composition areas may be empty.  Clicking the scan button will initiate a scan for asteroids but will consume 100 distance data to do so.  Once a scan is completed the Asteroids panel will populate with observed asteroids.</p>
    <p>Clicking on an Asteroid will bring up information about the selected asteroid in the Composition panel.  The Composition panel will estimates of how much of what kind of ore is in the selected asteroid.  Having Composition and mass data in the observatory (up to 2000 each) will decrease the amount of uncertainty of each type of ore.
    </p>
    <p>To program an asteroid chip with the location of the selected asteroid, put an unprogrammed asteroid chip into the slot with the chip icon, then once you have the desired asteroid selected, click on the gears between the two slots.  Programming the chip will use all the composition and mass data in the observatory as well as 500RF of energy.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/observatory_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes <br /> MultiBlock';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
