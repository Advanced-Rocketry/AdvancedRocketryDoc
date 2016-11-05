<?php
    $title = 'Railgun';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/railgun_demo.jpg" /><p><center><h3>Overview</h3></center>
    The primary purpose of the railgun is to accelerate items to extremely high speed using a powerful magnet to essentially shoot items from one planet to its moon.  The railgun is not powerful enough to transport item stacks between planets and its range is limited to bodies within the same system (including space stations).  In order to allow cross dimensional item transfer, the railgun does act as a chunk loader and if the remote end gets unloaded somehow, the transfer will fail.</p>
    <p>The railgun requires a tremendous amount of power to accelerate items up to speed, this amount of power is proportional to the distance being fired with a maximum power consumtion of 100,000RF.  When firing between planet the energy cost is 500,000 + 10*surface distance.  The railgun can be used to transfer items from one part of the planet to another part of the planet as well at a lower energy cost of 1RF per block distance.</p>
    <p>The railgun itself is comprised of a base which contains components nessessary to function such as a power supply, input/output buffers, and a control terminal.  To function, a railgun must have a power supply, control terminal, an input hatch and/or an output hatch.  Naturally a railgun with only an input hatch can only send items, whereas a railgun with an input hatch can only send items and a railgun with both type can both send and recieve items.</p>
    <hr><p><img align="left" src="../img/railgun_gui.png" /><center><h3>Usage</h3></center>
    Once the structure is built, the control terminal will be accessible via right click bringing up a GUI similar to the image on the left.</p>
    <p>The slot on the far left must be occupied by a <a href="../items/linker.php">Linker</a> programmed with the coordinates of the destination railgun.  If being used as reciever only, this slot may be empty.  The linker can be programmed with the coordinates of another railgun simply by shift-rightclicking the terminal of another railgun.</p>
    <br /><p>The "Min Transfer Size" box allows a player to specify the smallest stack size the railgun is allowed to send.  If no input hatch has a stack that large, the railgun will wait until a stack becomes larger than that value.</p>
    <p>The button with the redstone icon on the top right allows a player to choose under what redstone conditions the machine is allowed to operate, by default redstone control is disabled.</p>
    <p>The power swtich is to the left of the redstone control button, if the power switch is in the off position the machine will not fire, however if swtiched on, then the machine will fire assuming other conditions are met.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/railgun_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes <br /> Loads Chunk <br />MultiBlock<br />Redstone Control';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
