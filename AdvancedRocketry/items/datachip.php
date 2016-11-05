<?php
    $title = 'Data Storage Unit';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>The data storage unit is used to store data of different types.  This is useful for transporting data from a <a href="../blocks/satelliteTerminal.php">Satellite Terminal</a> or Observetory to machines like the <a href="../blocks/Abdp.php">Astrobody Data Processor</a>.</p>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/dataStorageUnit.png" /><hr>Has NBT: Yes<hr><center><h3>Teir 1</h3></center>Data Storage capacity: 500';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
