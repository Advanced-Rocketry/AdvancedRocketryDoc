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
    $title = 'Hatches and Loaders';

    $imageDemoName = 'hatch_demo.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '
        <p>Hatches are a way of inputting and outputting items, liquid, and energy to/from machines. A single hatch can
            be made as either an Input or Output hatch.  As an example, most machines will require and Power Input Hatch
            to receive power, an Input Hatch for input items, and an Ouput Hatch for returning the finished products.
            However, machines which handle fluids (like the <a href="/ChemicalReactor.php">Chemical Reactor</p>), may
            require both Fluid Input Hatches for input fluids (e.g., water), and Fluid Output Hatches for output fluids
            (e.g., Hydrogen and Oxygen).</p>
        <p>Input Hatches have a few inventory slots for holding items to be fed into the machine. As the machine
            operates these will be consumed. The results of the operation are then placed in Output Hatches. Either
            running out of inputs, or filling out the outputs will cause the machine to pause.</p>
        <p>Fluid Input Hatches have an internal reservior to hold a small amount of fluid, and can be filled either by
            placing a bucket in the slot, or right-clicking with a filled bucket.  They can also accept fluids from
            other mods\' pipe sysems (e.g., BuildCraft or Thermal Dyanamics). Fluid Output Hatches work in much the same
            way.  Most machines will stop operating with input tanks are empty, or output tanks are full.</p>
        <p>Most machines require a Power Input Plug to receive power from some kind of power grid. This can either be
            a Power Ouput Hatch from some a power-producting machine from Advanced Rocketry (e.g., the
            <a href="MicrowaveReceiver.php">Microwave Receiver</a>), any kind of generator from another mod, or a power
            conduit (e.g., a Fluxduct from Thermal Dynamics). Power Ouput Plugs are included in machines which
            generate power (like the Microwave Receiver previously mentioned) so that the power it generates may be
            transmitted to other machines or a power grid.</p>
        <p id="rockets">There are also a set of hatch-like blocks which are specialized for loading and unloading
            rockets. Check out the <a href="Loaders.php">page</a> dedicated to the family of loaders for more
            details.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='<h3>Interfacing with redstone</h3>
        <p>When connected to a rocket, hatches will output redstone signals under various circumstances:</p>
        <ul>
        <li>A rocket item loader will output a redstone signal when no more items can be loaded into the rocket</li>
        <li>A rocket fluid loader will output a redstone signal when the tanks on the rocket are completely full</li>
        <li>A rocket item unloader will output a redstone signal when there are no more items left in the rocket</li>
        <li>A rocket fluid unloader will output a redstone signal when there is no more fluid left in the rocket</li>
        </ul>';

    $sidebarImage = 'hatch_block.gif';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Teir 1</b><br />Number of slots: 4';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
