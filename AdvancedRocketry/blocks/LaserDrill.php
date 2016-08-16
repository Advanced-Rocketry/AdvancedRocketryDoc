<?php
    $title = 'Laser Drill';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/laserDrill_demo.jpg" /><p><h2 style="text-align: center;">Overview</h2>&nbsp;&nbsp;&nbsp;&nbsp;The Laser Drill is a mining device that can be placed on a space station to mine the planet below at the cost of an extreme amount of energy.</p>
    <p>The Laser Drill must be placed on a space station and must have a clear line of sight to the bottom of the world in order to function.  In future releases may also require the station pointing downward.</p>
    <p>While Running the laser drill will attempt to mine the planet specified by coordnites and will place collected blocks into an adjacent chest.  It will NOT place items into a chest on the front of the drill.</p>
    <p>If the chests are all full the drill will jam and turn itself off.  Clicking the "reset" button in it\'s GUI will cause to to attempt to continue running if the jam is cleared.</p>
    <p>The laser drill requires a redstone signal to turn on and will stop running if the redstone signal is cut.</p>
    <hr>
    <h2 style="text-align: center;">Usage</h2>
    <img align=left src="../img/laserDrill_gui.png"/>
    <p>The <font color="#009999">mode selector</font> control allows the laser to operate in one of several different modes by clicking the left and right arrows:</p>
    <ul style="left: 1em;">
    <li style="left: 1em;"><b>Single</b>: mines a single location straight down and turns off once bedrock is hit</li>
    <li style="left: 1em;"><b>Line X</b>: Mines in a straight line along the X axis indefinately starting at the supplied coords</li>
    <li style="left: 1em;"><b>Line Z</b>: Mines in a straight line along the Z axis indefinately starting at the supplied coords</li>
    <li style="left: 1em;"><b>Spiral</b>: Mines a spiral outward from the supplied coords</li>
    </ul>
    <p>The <font color="#990000">X</font> and <font color="#009900">Z</font> text boxes specify the starting location of the drill on the planet below.</p>
    <p>The laser drill requires there to be a lens in the <font color="#999900">lens slot</font> in order to function.  In future versions, better lenses may reduce power required or other effects</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/laserDrill_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
