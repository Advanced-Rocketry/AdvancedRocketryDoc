<?php
    $title = 'Warp Core';
    
    $mainContent = '<h1>'.$title.'</h1><hr>
    <img align="left" src="../img/warpCore_demo.jpg" /><h2><center>Overview</center></h2>
    <p>
    The warp core multiblock structure is responsible for providing the fuel input for the starship as well as moving it around.  Dilithium crystals can be put into the top of the structure for fuel.  Though the warp core is a nessessary component of the starship.  The <a href="WarpController.php">warp controller</a> is repsponsible for actually choosing the destination of the starship.
    </p>
    <p>
    A warp core block placed on a rocket allows the rocket to travel to other planets in the same solar system.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/warpCore_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
