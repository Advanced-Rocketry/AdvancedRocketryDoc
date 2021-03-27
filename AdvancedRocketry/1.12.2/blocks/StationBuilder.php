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
    $title = 'Space Station Assembler';

    $imageDemoName = 'stationDockingPort_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Space Station Assembler is constructed in the same way as the <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>.  However, rather than build rockets, it builds space station modules from the blocks placed on the pad.</p>
    <p>These modules can then be loaded onto a rocket and launched into orbit. You can then use <a href="StationDockingPort.php">station docking ports</a> to attach multiple modules.</p><br><br><br>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'stationBuilder_gui.png';
    $descriptionGUI ='<p>Like the <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>, the Station Builder\'s scan and build buttons scan and build the structure respectively.</p>
    <p>To build a new station, a <a href="SatelliteHatch.php">Satellite Bay</a> must be placed in the top left slot and an unprogrammed station chip must be placed in the top right slot and a structure must be build on the pad.  Once these goals are met, a space station can be built.  At the start of the build process, the station chip and the Satellite Bay are consumed.  At the end of the build process, the structure on the pad is placed into a new station item that is placed in the bottom left slot and a station chip programmed with the coordinates of the new space station\'s orbit is placed in the bottom right slot.</p>
    <p>Before going to the space station, the space station must be launched into orbit.  This can be done by placing the station item into a satellite bay on a rocket and launching it.  The newly created station will be in orbit around the planet it was launched from.</p>
    <br />
    <h3>Station modules</h3>
    <p>Once a station is built, it is possible to use <a href="StationDockingPort.php">Station Docking Ports</a> to launch new module and attach them to the station.</p>
    <p>Building a station module follows the same process as building a station for the first time, the major difference is that instead of an unprogrammed station chip in the top right slot, a chip programmed with the id of the target station must be placed there instead.  When building a station module, the chip does not get consumed.</p>'; 
    
    $sidebarImage = 'rocketAssemblingMachine_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
