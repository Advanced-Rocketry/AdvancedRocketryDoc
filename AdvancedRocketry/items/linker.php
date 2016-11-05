<?php
    $title = 'Linker';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>The linker is a tool that is used to link various things together.</p>
    <p>The most common use of the linker is to link <a href="../blocks/hatches.php">hatches</a> to Rockets, <a href="../blocks/DockingPad.php">Docking Pads</a>, and <a href="../blocks/RocketAssemblingMachine.php">Rocket Assembling Machines</a>.</p>
    <p>To program the linker, shift right click on the block you wish to link from.  To link with a programmed linker, shift right click on the destination block.  To clear the Linker, shift right click while not looking at anything.</p>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/linker.png" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
