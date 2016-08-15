<?php
    $title = 'Guidance Computer';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/guidanceComputer_gui.png" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;The Guidance Computer is responsible for determining the trajectory of a rocket so that it can reach its destination (hopefully in one piece).</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;A manned rocket requires exactly one guidance computer.  The guidance computer requires either a planet ID chip or a space station ID chip to successfully travel to its destination.</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;If a planet ID chip is used then the destination can be selected by using the "Select Planet" button in the main menu of a rocket</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;If multiple guidance computers were built into one rocket, one would override the other, however it is impossible to know which one wins out before you arrive at your destination.</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/guidanceComputer_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Destination Storage: 1';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
