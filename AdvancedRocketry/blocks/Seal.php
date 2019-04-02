<?php
    $title = 'Seal';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align="left" src="../img/seal_demo.jpg" />
    <p>The seal block is designed to create a seal around any non sealable block (including air) to make it possible to transfer items, liquids, and energy to space station and base interiors while maintaining an O2 seal.</p>
    <p>This block can create a seal around any 1x1 hole as long as the edges are all seal blocks.  Entities are able to pass through the center enabling contructs involving trains and carts.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/seal_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: No';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
