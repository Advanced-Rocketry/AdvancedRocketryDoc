<?php
    $title = 'Force Field Projector';
    
    $mainContent = '<h1>'.$title.'</h1><hr>
    <img align="left" src="../img/forceField_demo.jpg" /><h2><center>Overview</center></h2>
    <p>
    When activated with a redstone signal a forcefield will slowly emerge from the front face of the block.  This forcefield cannot be broken by normal means.  The forcefield retracts when the redstone signal is removed.  The forcefield blocks are airtight and, as such, can be used to seal stations and bases.
    </p>
    <p>
    The forcefield projector can project a field up to 32 blocks away.  The field stops extending as soon as it hits a non-replacable block.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/forceField_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
