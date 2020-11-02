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
    $title = 'Launch Pad';

    $imageDemoName = 'launchPadDemo.png';

    //USE <p></p> to make a new paragraph
    $description1 = '
        <p>A concrete block that serves as the base for the rocket assembly platform, which is constructed from Launch
            Pad blocks, <a href="StructureTower.php">Structure Tower Blocks</a>, and a
            <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>. When placed down next to another launch
            pad block, the textures will rearrange themselves to make the
            connection appear seamless.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';

    $sidebarImage = 'launchPad_block.png';

    $hardness = '2';
    $blastResistance = '10';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'NO';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
