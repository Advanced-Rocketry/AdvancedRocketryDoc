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
    $title = 'Rocket Loaders/Unloaders';

    $imageDemoName = 'hatch_demo2.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '
        <p>The family of loader/unloader blocks allow moving items and fluids on to and off of a rocket. There is an
            input and output version for items and fluids, giving you the: Rocket Loader, Rocket Unloader, Rocket Fluid
            Loader, and the Rocket Fluid Unloader.  These are placed independently in the world and connected to a
            rocket, a <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>, or
            <a href="LandingPad.php">Docking Pad</a> using a <a href="../items/linker.php">Linking Tool</a> (see that
            tool\'s page for more details). When linked to a Docking Pad or Rocket Assembling Machine, any rocket that
            lands on the pad will automatically be linked to the loaders/unloaders attached to that machine.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';

    $sidebarImage = 'hatch_block.gif';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Tier 1</b><br />Number of slots: 4';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
