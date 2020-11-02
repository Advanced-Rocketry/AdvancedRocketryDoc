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
    $title = 'Force Field Projector';

    $imageDemoName = 'forceField_demo.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '<p>When activated with a redstone signal a forcefield will slowly emerge from the front face of the block.  This forcefield cannot be broken by normal means.  The forcefield retracts when the redstone signal is removed.  The forcefield blocks are airtight and, as such, can be used to seal stations and bases.</p>
    <p>The forcefield projector can project a field up to 32 blocks away.  The field stops extending as soon as it hits a non-replacable block.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';

    $sidebarImage = 'forceField_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
