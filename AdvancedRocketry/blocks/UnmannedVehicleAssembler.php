 <?php
    $title = 'Unmanned Vehicle Assembler';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/unmannedVehicleAssembler_demo.jpg" /><p><h2 style="text-align: center;">Overview</h2>&nbsp;&nbsp;&nbsp;&nbsp;The Unmanned Vehicle Assembler is a block that takes power in the form of RF to either scan or build a drone in a gantry.</p>
    <p>Because drones are launched from orbit, and are not designed to land, they have a reduced fuel requirement compared to standard rockets.</p>
    <br>
    <p>Other than construction, the usage of the Unmanned Vehicle Assembler is similar to the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>.</p>
    <p>Like the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>, infrastructure can be linked to drones through the Unmanned Vehicle Assembler using the <a href="../items/linker.php">Linking tool</a>.</p>
    <p>When the drones are launched, they will descent before travelling in the direction facing away from the Unmanned Vehicle Assembler.  In future builds, there may be an option to change the direction of launch.</p>
    <hr>
    <img align="left" src="../img/unmannedVehicleAssembler_demo2.gif" />
    <h2><center>Construction</center></h2>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Unlike the <a href="./RocketAssemblingMachine.php#usage">Rocket Assembling Machine</a>, the Unmanned Vehicle Assembler builds the craft horizontally instead of vertically.</p>
    <p>Once the Unmanned Vehicle Assembler is placed, <a href=./StructureTower.php>Structure Tower</a> blocks can be placed on the top and sides of the machine to determine the area in which to build the vehicle.</p>
    <br>
    <p>A bar must extend from the top of the vertical tower to determine the length of the area to build.</p>
    <p>The video to the left illistrates the effects of modifying the size of the gantry in various ways, where the white box indicates the valid building area for the machine.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/rocketAssemblingMachine_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes<hr>Min Structure Size: 3x3x3<br />Max Structure Size: 12x12x12';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
