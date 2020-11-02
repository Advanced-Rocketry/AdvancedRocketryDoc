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
    $title = 'Crystallizer';

    $imageDemoName = 'crystallizer_demo.png';

    //USE <p></p> to make a new paragraph
    $description1 = '<p>The Crystallizer is a multi-block construction which allows for creation of dilithium crystals and silicon boule.</p><p>Inputs are inserted via the input hatch and the output items can be retrieved from the output hatch. Use the <a href="/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Crystallizer machine block.</p><p>Use higher tier <a href="Coils.php".php">Coils</a> and <a href="/Motors.php">Motors</a> to increase performance. Despite the animation, the crystalliser only processes one set of inputs at a time, not three. You\'ll need a crystalliser if you want to make any of the more advanced circuits or to make satellite sensors, both of which need silicon wafers to complete.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';

    $optionalSection='';

    $sidebarImage = '';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = '';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
