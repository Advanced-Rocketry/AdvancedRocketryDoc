<?php
    $title = 'Gas Charge Pad';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/gasChargePad_demo.jpg" /><p><center><h2>Overview</h2></center>&nbsp;&nbsp;&nbsp;&nbsp;
    The Gas Charger provides an easy way for the player to fill their <a href="../items/modularSpaceSuit.php">modular space suit</a> with various gasses such as Oxygen and Hydrogen.
    <br><br><br><br><hr>
    <h2><center>Usage</center></h2>
    <img align="left" src="../img/gasChargePad_gui.png" />To use gas charge pad, fill the charge pad up with the gas you want to use, then stand on top of it.  The <font color="#009900">item slots</font> can be used to fill and empty gasses from the pad.</p>
    <p>The <font color="#990000">fill indictor</font> display how much of the gas is in the charge pad.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/gasChargePad_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
