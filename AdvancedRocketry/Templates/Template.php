<?php
    $title = 'NAME OF BLOCK';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/nameOfBlock_demo.jpg" /><p>INSERT TEXT HERE</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/nameOfBlock_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Fuel Storage: 500mb';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
