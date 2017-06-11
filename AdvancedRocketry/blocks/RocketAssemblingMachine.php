<?php
    $title = 'Rocket Assembling Machine';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/rocketAssemblingMachineDemo.jpg" /><p><h2 style="text-align: center;">Overview</h2>&nbsp;&nbsp;&nbsp;&nbsp;The Rocket Assembling Machine is a block that takes power in the form of RF to either scan or build a rocket on a multiblock launch pad structure.<hr></p>
    <p><h2 style="text-align: center;">Construction</h2>&nbsp;&nbsp;&nbsp;&nbsp;The base of the construction pads is made from <a href="LaunchPad.php">Launch Pad Blocks</a>. It can be any size between
    3x3 and 16x16.  The base does not have be a square, rectangular shapes work too.  The height of the structure is defined by the <a href=StrcutureTower.php> Structure Tower Blocks</a> and can be anywhere between 4 and 64 blocks tall.  If multiple structure towers exist in the structure, then the height of the tallest tower is used.  The base of the tower must be at the same level as the rocket pad.  The base of the tower also has to be touching the pad on one of the four faces and cannot be placed diagonally.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;The Rocket Assembling machine must be one block above the pad with the back of the machine facing the pad for the Strcuture to form.  Larger construction pads require more time to scan and build the rocket!</p><hr><p>Left: Completed Structure<br />Right: Cross Section</p>
    <div style="height: 470px; display: block; padding: 4px; border: 1px solid #a9a9a9;"><img align="left" style="width: 49%; border: none;" src="/AdvancedRocketry/img/minSizeLaunchPad.jpg" /><img align="right" style="width:49%; border: none;"  src="/AdvancedRocketry/img/RocketAssemblyPad.gif" /></div><hr><img align="left" src="/AdvancedRocketry/img/rocketAssemblingMachineGui.png" /><p><h2 style="text-align: center;" id="usage">Usage</h2>
    &nbsp;&nbsp;&nbsp;&nbsp;Once the structure is properly built then right clicking the Rocket Assembling Machine will open an interface.  The interface
    has four key areas: 
   
    <ol><li style="left: 1em;">The rocket statistic panel</li>
    <li style="left: 1em;">the status panel</li>
    <li style="left: 1em;">the user input panel (my fancy way of saying two buttons)</li>
    <li style="left: 1em;">the machine status panel.</li></ol>
    </p><br /><br /><br /><br /><br /><p>The Rocket statistic panel constains four readouts:
    <ul>
    
    <a name="rocketStats" />
    <li><b>Thrust:</b> How much thrust the engines are producing in newtons.  Higher teir engines/fuel provide more thrust per engine</li>
    <li><b>Weight:</b> Essentially how many blocks are in the rocket.  Each blocks is expected to weight one Kilogram (F=ma), however blocks with inventories can increase weight by more than one kilogram.</li>
    <li><b>Fuel:</b> How fast fuel is consumed in milibuckets per second.  The bar indicates how much fuel you expect to have left over after reaching orbit.
    The white line indicates the amount of fuel needed to reach orbit.</li>
    <li><b>Acceleration:</b> How fast the rocket is expected to accelerate on a planet with Overworld mass in meters per second.  The while line indicates 0 m/s</li>
    </ul></p>
    <p>The <font color="green">Scan</font> button will command the Rocket Assembling Machine to start scanning the rocket built on the launch pad but will <b>NOT</b> assemble the rocket.
    This is useful when testing to see if a design is capable of reaching orbit.</p>
    
    <p>The <font color="red">Build</font> function performs the same function as the scan function, but if the rocket is capable of reaching orbit then the blocks on the launch pad will be assembled into a completed rocket.</p><p>The status panel displays error messages from the
    Rocket Assembling Machine.  The messages are be self-explainatory.</p>
    
    <p>The machine status panel contains two bars, the progress bar, which is marked with a 
    hammer, displays the machine\'s progress with either the scan or build function.  The bar marked with the battery icon displays the amount of power stored in 
    the assembling machine.</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/rocketAssemblingMachine_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes<hr>Min Structure Size: 3x4x3<br />Max Structure Size: 16x64x16';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
