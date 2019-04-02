<?php
    $title = 'Satellite Bay';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/satelliteHatch_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp; The Satellite Bay is a special block for rockets that holds a satellite to be released upon reaching orbit.</p>
    <p>This block can be placed anywhere on the rocket and can be accessed once built by crouching and right clicking the rocket.</p>
    <p><h3>Future Plans:</h3></p>
    <p>Require different Teirs for larger/heavier satellites</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/satelliteHatch_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Weight Capacity: Unlimited<br />Maximum Size: Unlimited';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
