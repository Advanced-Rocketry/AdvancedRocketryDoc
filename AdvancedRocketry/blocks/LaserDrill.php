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
    $title = 'Orbital Laser Drill';

    $imageDemoName = 'laserDrill_demo.jpg';

    //USE <p></p> to make a new paragraph
    $description1 = '<p>The Orbital Laser Drill is a mining device that can be placed on a space station to mine the planet below at the cost of an extreme amount of energy.</p>
    <p>The Laser Drill must be placed on a space station and must have a clear line of sight to the bottom of the world in order to function.  In future releases may also require the station pointing downward.</p>
    <p>The laser drill can require around 20kRF/t, at the benefit of mining one block per tick, or 20 blocks per second. Not every block will be an ore, but it is still reccomended to have robust power generation and item transport before setting a drill up, as is having robust ore processing to deal with the ore income. Something like an Immersive Engineering Arc Furnace or a Mekanism Factories ore processing line is recommended to be able to keep up with the drill. To create the power, a good solution is as many satellites will fit into a <a href="MicrowaveReciever.php">microwave receiver</a> with as many large solar panels as you can fit into them.</p>
    <p>While running, the laser drill will attempt to mine the planet at the specified coordinates if "laserDrillPlanet" is set to <tt>true</tt>.  If "laserDrillPlanet" is set to <tt>false</tt> the laser drill will not actually damage the planet below</p>
    <p>Collected blocks will be placed into an <a href="Hatches.php">output hatch</a>.  It will NOT place items into a chest on the front of the hatch.  Items will need to be removed by hand or some piping mechanism.</p>
    <p>If the hatches are all full the drill will jam and turn itself off.  Clicking the "reset" button in it\'s GUI will cause to to attempt to continue running if the jam is cleared.</p>
    <p>The laser drill requires a redstone signal to turn on and will stop running if the redstone signal is cut.</p>';

    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'laserDrill_gui.png';
    $descriptionGUI ='<p>The <font color="#009999">mode selector</font> control allows the laser to operate in one of several different modes by clicking the left and right arrows:</p>
    <ul style="left: 1em;">
    <li style="left: 1em;"><b>Single</b>: mines a single location straight down and turns off once bedrock is hit</li>
    <li style="left: 1em;"><b>Line X</b>: Mines in a straight line along the X axis indefinately starting at the supplied coords</li>
    <li style="left: 1em;"><b>Line Z</b>: Mines in a straight line along the Z axis indefinately starting at the supplied coords</li>
    <li style="left: 1em;"><b>Spiral</b>: Mines a spiral outward from the supplied coords</li>
    </ul>
    <p>The <font color="#990000">X</font> and <font color="#009900">Z</font> text boxes specify the starting location of the drill on the planet below.</p>
    <p>The laser drill requires there to be a lens in the <font color="#999900">lens slot</font> in order to function.  In future versions, better lenses may reduce power required or other effects</p>';

    $sidebarImage = 'laserDrill_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
