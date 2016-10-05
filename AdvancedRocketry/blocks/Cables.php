<?php
    $title = 'Energy Cable';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/energyCable_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp; The energy cable provides a way to connect energy generators to energy consuming devices.</p>
    <p>The energy cable will automatically draw up to 1000 power per second from and Forge power compatible blocks and transfer the power to any Forge Compatible reciever block.</p>
    <p>Note: this block only exists in MC1.10.2 versions of AR.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/energyCable_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Power Transfer: 1000/t';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
