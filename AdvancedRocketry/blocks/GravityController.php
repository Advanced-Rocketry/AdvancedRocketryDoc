<?php
    $title = 'Gravity Controller';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/gravityController_demo.jpg" /><p><center><h3>Overview</h3></center>
    The gravity controller is a machine that can be used to manipulate gravity within a certain radius in exchange for energy.  The gravity controller can also affect the direction of gravity.  When activated it does have a warmup and cooldown time so effects are not immediate.
    </p>
    <p>
    The gravity controller has two modes for each direction, additive gravity, and replacment gravity.  Additive gravity adds the effects of the machine on top of what the entities in the area already experience.  Using the set/replacement mode, the machine will override gravity in the area with its own entirely.
    </p>
    <hr><img align="left" src="../img/gravityController_gui.png" /><p><center><h3>Usage</h3></center>
    <p>
    The UI in the gravity controller contains several controls.  On the bottom is the target gravity slider.  This lets the player set the target gravity for the machine.  The machine takes a little time to spin up, so changes here are not immediate.  Above that is an indicator displaying the current level of gravity compared to the target gravity level.
    </p>
    <p>
    Above the target gravity indicator is the radius slider, this slider allows the player to control the radius of the effect in blocks.
    </p>
    <p>
    The target direction control contains a series of squares corresponding to direction as viewed from top down.  The square in the middle determines the effect in the up direction.  The square in the bottom right controls effect in the down direction.  Clicking on each of these squares toggles through the possible effect modes for each direction.
    </p>
    <p>
    The on/off switch in the top right controls the state of the machine.  When off no effect on gravity will be produced and the machine will slow down rapidly.  The redstone tab changes how the machine responds to a redstone signal.
    </p>';
    
    $infoBarContent = $title.'<hr><img src="../img/gravityController_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<br />MultiBlock<br />Redstone Control';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
