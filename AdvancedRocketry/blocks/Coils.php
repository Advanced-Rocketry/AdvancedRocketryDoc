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
    $title = 'Coils';

    $imageDemoName = 'coil_demo.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '<p>Coils are used in the construction of multiblock machines throughout the mod (for example, the <a href="ElectricArcFurnace.php">Electric Arc Furnace</a>).  Coils also come in several tiers, higher tier coils being more powerful, but more expensive to make.  Using higher tier coils in some machines can decrease the amount of time required for a recipe.  Like the motors, the speed increases stack multiplicitivly.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';

    $sidebarImage = 'coil_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'NO';
    $multiBlock = 'NO';
    $other = '<br><b>Other Coils</b><br>Speed Multiplier: 1x<hr><b>Gold Coil</b><br>Speed Multiplier: 1.11x<hr><b>Aluminum Coil</b><br>Speed Multiplier: 1.25x<hr><b>Titanium Coil</b><br>Speed Multiplier: 1.33x<hr><b>Iridium Coil</b><br>Speed Multiplier: 2x<hr><p>Note: The modifiers are multiplicative, so if an Arc Furnace had 3 Iridium coils the actual speed boost would be 8x (2x*2x*2x).</p>';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
