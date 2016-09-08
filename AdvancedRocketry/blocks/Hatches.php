<?php
    $title = 'Hatches and Loaders';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align="left" src="../img/hatch_demo.jpg" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Hatches are a way of inputting and outputting items, liquid, energy, and data from rockets and machines.</p>
    <p>There are three main different types of hatches: Fluid, Item, and Energy.</p>
    <p>Fluid hatches, when built into a machine provides the capacity for the machine to accept fluids, this is nessessary for some recpies</p>
    <p>Item Hatches are used to provide a way of getting items into and out of a machine.  Most will move an itemstack over if there is room if the output stack cannot fit in the last slot.</p>
    <p>Energy Hatches are used to accept or output energy from a machine.</p>
    <hr>
    <h2 id="rocket"><center>Rocket Loaders/Unloaders</center></h2>
    <img align="left" src="../img/hatch_demo2.jpg" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Both the fluid and item hatched have a rocket loader/unloader varient, which is used to load/unload fluids and items from the rocket</p>
    <p>The hatches can be linked directly to a rocket, a rocket assembler, or Docking Pad using a <a href="../items/linker.php">Linking tool</a>.</p>
    <p>When linked to a Docking Pad or rocket assembler, any rocket that lands on the Docking Pad or on the landing pad will automatically be linked to the hatches.</p>
    <br><h3>Interfacing with redstone</h3>
    <p>When connected to a rocket, hatches will output redstone signals under various circumstances:</p>
    <ul>
    <li>A rocket item loader will output a redstone signal when no more items can be loaded into the rocket</li>
    <li>A rocket fluid loader will output a redstone signal when the tanks on the rocket are completely full</li>
    <li>A rocket item unloader will output a redstone signal when there are no more items left in the rocket</li>
    <li>A rocket fluid unloader will output a redstone signal when there is no more fluid left in the rocket</li>';
    
    $infoBarContent = $title.'<hr><img src="../img/hatch_block.gif" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Number of slots: 4';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
