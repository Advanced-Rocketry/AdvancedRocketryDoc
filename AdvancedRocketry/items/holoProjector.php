<?php
    $title = 'Holo-Projector';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>The Holo-Projector is a handheld hologram projector that allows you to see a projection to aid you in building of large machines.</p>
    <p>Shift-right clicking on the Holo-Projector opens up a gui which allows you to select the machine to project.</p>
    <p>After selecting a machine from the interface, right clicking on a block will create a projection of the selected machine.</p>
    <p>Holding shift while scrolling with the holo-projector selected will move the cross section of the projected machine in-world.</p>
    <p>Right clicking on a machine control block in world with the holo-projector will align the hologram to the machine.</p>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/holoProjector.png" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
