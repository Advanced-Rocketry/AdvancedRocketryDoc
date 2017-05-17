<?php
    $title = 'Motors';
    
    $mainContent = '<h1>'.$title.'</h1><hr>
    <img align="left" src="../img/motors_demo.jpg" /><h2><center>Overview</center></h2>
    <p>Motors are used in the construction of multiblock machines throughout the mod.  Motors also come in several teirs, higher teir motors being more powerful, but more expensive to make.
    </p>
    <p>In most machines, the type of motor built into the machine impacts the machine\'s speed.  The speed increase depends on the type of motor used.  Regular motors have no change in speed, however Advanced motors increase the machine\'s processing speed by 1.5x, the Enhanced motors by 2x, and the elite motors by 4x.</p>
    <br>
    <p>
    The effect of motors also stack, so in machines capable of housing multiple motors, having two elite motors can increase the processing speed of the machine by 4*4 = 16x</p>
    
    <p>
    One exception that exists is the <a href="Observatory.php">observatory</a>.  Rather than increasing the speed of the observatory, higher teir motors increase the observatory\'s obervable distance.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/motor_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: No<hr><center>Motor</center><br />Speed Multiplier: 1x<hr><center>Advanced Motor</center><br />Speed Multiplier: 1.5x<hr><center>Enhanced Motor</center><br />Speed Multiplier: 2x<hr><center>Elite Motor</center><br />Speed Multiplier: 4x';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
