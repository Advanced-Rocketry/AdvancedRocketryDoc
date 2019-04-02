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
    $title = '';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>YOUR TEXT HERE</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
<?php
    $title = 'Warp Controller';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/warpController_demo.jpg" /><p><center><h2>Overview</h2></center>
    The warp controller is the control station block in a starship.  Simply placing the warp controller and <a href="WarpCore.php">warp core</a> anywhere on a space station can turn it into a mobile starship capable of warping between planets and even solar systems.  The control panel offered by the warp controller allows a player to view their current location as well as select destinations as well as view fuel storage on the starship.</p>
    <br>
    <br>
    <hr>
    <img align="left" src="../img/warpController_gui.png" /><p><center><h2>Basic Usage</h2></center>
    <p>The first tab contains information about the ship\'s current location as well as its destination.  The planet the ship is currently in orbit around is displayed with an icon and name under the "orbiting" panel.  If the starship is currently in warp, no icon is displayed and the planet name is "space".</p>
    <p>
    A destination planet may be selected by clicking the "select planet" button.
    </p>
    <p>
    The second panel contains the currently selected destination planet\'s icon and name.  Depending on the distance from the orbiting planet to the destination the fuel cost may increase or decrease.  Fuel cost is calculated by distance between the two planets.  So if you are activly trying to conserve fuel it may be beneficial to wait until two planets near each other in their orbits.</p>
    <br>
    <p><h3>Warp System status</h3>
    Traveling from a planet to its moon is very cheap because they are so close together.  Though it may be easier to just use a rocket or <a href="spaceElevator.php">space elevator</a> at that point.  Warp ships are also able to travel between star systems.  However travelling to planets in other star systems is a very fuel consuming task due to the distances involved.</p>
    <p>
    The core status indicator show the current status of the warp system.  If the destination and orbiting planets are the same then "nowhere to go" is displayed.  The status indicator will also warn if you do not have enough fuel to make the jump or if the warp system is ready to go.
    </p>
    <hr>
    <img align="left" src="../img/warpController_gui2.png" /><p><center><h2>Advanced Usage</h2></center>
    <p>
    If planet hiding is enabled in the advanced rocketry config file then it may be required to discover planets before being able to visit them.  In that case the second and third tabs of the warp controller may be used.</p>
    <p>The second tab displays the amount of different kinds of data contained in the warp controller.  The third tab (pictured left) contains slots for artifacts as well as a progress bar, slot for a planet ID chip, and several controls.
    </p>
    <p>
    A planet ID chip programmed with a previously unknown planet id can be placed in the slot at the bottom left and used to add a new planet to the list of known planets for the warp controller using the "program from chip" button.
    </p>
    <br>
    <p>
    <h3>Discovering planets</h3>
    
    The warp controller can also be used to discover new planets.  Placing an unprogrammed planet id chip into the slot and pressing the "search for planet" button will initiate a planet search.  Completing a planet search may take some time and also requires 100 of each kind of data.  Searching for planets is often unsuccessful and multiple attempts may need to be made.  Upon successful completion the planet id chip will be programmed and the planet will be make known to the warp controller.
    </p>
    <p>
    Depending on the configuration of the world, some planet may need a certain artifact to be able to discover and visit.  If an artifact pertaining to a planet is placed in the artifact slots then when trying to discover a planet a planet with those artifacts is garunteed to be discovered.  If all planets with that set of artifacts are already known, then a random planet may be discovered instead.
    </p>
    <p>As a side note: planets contained active <a href="Beacon.php">beacons</a> can be seen by all players, even if they have not yet discovered the planet.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/warpController_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
