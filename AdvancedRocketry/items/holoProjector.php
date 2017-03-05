<?php
    $title = 'Holo-Projector';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2><img align="left" src="../img/holoprojector_demo.jpg" />
    
    <p>The Holo-Projector is a handheld hologram projecting device that allows you to see a projection of a selected structure to aid you in building of large machines.</p>
    <p>Shift-right clicking on the Holo-Projector opens up a gui which allows you to select the machine to project.  You can scroll up and down in this menu by using the scroll wheel on the mouse or middle clicking and dragging.  After selecting a machine by clicking on the button representing it, hovering over the holo-projector will display a list of required materials to build the machine.</p>
    
    <p>Once a machine is chosen from the interface described above, you can right click a spot on the ground to create a hologram of the machine.  Holding shift while scrolling with the holo-projector selected will move the cross section of the projected machine in-world.</p>
    <p>Right clicking on a machine control block in world with the holo-projector will align the hologram to the machine.</p>
    ';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/holoProjector.png" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
