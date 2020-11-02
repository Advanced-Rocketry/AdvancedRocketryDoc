<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference.

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time.

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:

            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png

        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.

    */

    //NAME OF BLOCK
    $title = 'Gravity Controller';

    $imageDemoName = 'gravityController_demo.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '<p>The Gravity Controller is a machine that can be used to manipulate gravity within a certain radius in exchange for energy.  The Gravity Controller can also affect the direction of gravity.  When activated it does have a warmup and cooldown time so effects are not immediate.</p>
    <p>The Gravity Controller has two modes for each direction, additive gravity, and replacment gravity.  Additive gravity adds the effects of the machine on top of what the entities in the area already experience.  Using the set/replacement mode, the machine will override gravity in the area with its own entirely.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'gravityController_gui.png';
    $descriptionGUI ='<p>The UI in the Gravity Controller contains several controls.  On the bottom is a slider used to set the target gravity for the machine.  The machine takes a little time to spin up, so changes here are not immediate.  Above that is an indicator displaying the current level of gravity compared to the target gravity level.</p>
    <p>Above the target gravity indicator is the radius slider, this slider allows the player to control the radius of the effect in blocks.</p>
    <p>The target direction control contains a series of squares corresponding to direction as viewed from top down.  The square in the middle determines the effect in the up direction.  The square in the bottom right controls effect in the down direction.  Clicking on each of these squares toggles through the possible effect modes for each direction.</p>
    <p>The on/off switch in the top right controls the state of the machine.  When off no effect on gravity will be produced and the machine will slow down rapidly.  The redstone tab changes how the machine responds to a redstone signal.</p>';

    $sidebarImage = 'gravityController_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='Redstone Control';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
