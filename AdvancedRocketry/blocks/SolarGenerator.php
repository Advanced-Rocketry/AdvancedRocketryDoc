<?php
    $title = 'Solar Generator';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/solarGenerator_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp; The Solar Generator is a solar panel that generates a small amount of power just by being in sunlight.</p>
    <p>The panel will work as long as it has a direct line of sight to the sky (it does work under glass blocks) and it is not night time.</p>
    <p>Note: this block only exists in MC1.10.2 versions of AR.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/solarGenerator_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Power Generation: 1/t';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
