<?php
    $title = 'Cables';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/energyCable_demo.jpg" /><h2>Energy Cable</h2><p>&nbsp;&nbsp;&nbsp;&nbsp; The energy cable provides a way to connect energy generators to energy consuming devices.</p>
    <p>The energy cable will automatically draw up to 1000 power per second from and Forge power compatible blocks and transfer the power to any Forge Compatible reciever block.</p>
    <p>Note: the 1.7.10 version requires a redstone signal on the energy source pipe and only works with RF capable blocks</p>
    <hr><h2>Data Cable</h2>
    <p>The data cable provides a way to transfer data between machines without requiring the data chip.</p>
    <p>The Data cable will pull 1 data/tick from a data source.  Data will only be pulled if the pipe is powered by redstone</p>
    <p>In addition, when pulling from the Satellite terminal will automatically pull directly from the satellite.</p>
    <hr><h2>Liquid Pipe</h2>
    <p>The liquid pipe can transmit liquid from a tank to any other tank at a 100 milibuckets/tick.  Like the other two pipes, the source pipe must be powered to pull liquid.';
    
    $infoBarContent = $title.'<hr><img src="../img/energyCable_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Power Transfer: 1000/t';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
