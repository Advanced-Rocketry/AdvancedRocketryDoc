<?php
    $title = 'NAME OF BLOCK';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/nameOfBlock_demo.jpg" /><p><h3>Overview</h3>INSERT TEXT HERE</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/nameOfBlock_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
