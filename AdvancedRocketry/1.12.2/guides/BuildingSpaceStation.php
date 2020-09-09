<?php
    $title = 'Intergalactic Travel';
    
    $mainContent = '<h2>'.$title.'</h2><hr><br>
    <center><h2>Introduction</h2></center>
    <div style="display: inline-block">
    <p>Space stations, in addition to being cool, also provide a platform to mine ores, travel throughout the galaxy, and mine gas from gas giants.</p>
    </div>
    
    <hr>
    <a name="basics"></a>
    <center><h2>Building a Construction Pad</h2></center>
    <img align="left" width="256px" src="../img/RocketAssemblyPad.gif" />
    <p>
    Similarly to building a rocket, Space Stations must be built on a construction pad.  Though instead of using a <a href="../blocks/RocketAssemblingMachine.php">Rocket Assembling Machine</a>, a <a href="../blocks/StationBuilder.php">Station Builder</a> must be used instead.  Note: it is possible to have both the Rocket Assembling Machine and Station Build sharing a single pad.
    </p>
    
    <p>
    The base of the Construction pad is made from Launch Pad Blocks.  It can be any size between 3x3 and 16x16. The base does not have be a square, rectangular shapes also work. The height of the structure is defined by the Structure Tower Blocks and can be anywhere between 4 and 64 blocks tall.</p>
    <p>If multiple structure towers exist in the structure, then the height of the tallest tower is used. The base of the tower must be at the same level as the construction pad. The base of the tower also has to be touching the pad on one of the four faces and cannot be placed diagonally.

    The Station Builder must be one block above the pad with the back of the machine facing the pad for the Strcuture to form. Larger construction pads require more time to scan and build the station!
    </p>
    
    <hr>
    <a name="building"></a>
    <center><h2>Constucting the Station</h2></center>
    <img align="left" width="256px" src="../img/stationBuildTutorial_1.png" />
    <p>
    Now that the construction pad is complete, it\'s time to actually build a space station!  Exactly what the station should look like is entirely up to you, though you should consider some things when building a station.</p>
    <p>The first time you go to your new station the rocket will land in the center of the first module you send up, so it is advised that the structure either be a landing platform of some kind or have a landing platform on top.  It\'s possible to change where the rockets land later by placing <a href="../blocks/LandingPad.php">docking pads</a> on the station while in orbit.</p>
    <p>
    Once you\'ve built your station on the construction platform, you must scan and build the station.  In order to build the station you must have a <a href="../blocks/SatelliteHatch.php">satellite bay</a> in the upper left slot of the station builder, and an unprogrammed station chip in the top right slot.</p>
    <p>It is important that the chip be unprogrammed because programmed chips change the behavior of the machine!  Running a scan first is advised because it will tell you if anything is wrong with your structure, but if you\'re confident, there is no reason you cannot build right away.</p>
    <p>
    Once the station is finished building the station builder will produce a chip programmed with the ID of your station as well as a space station container.  The station chip is used to get to that particular station in a rocket.  It is highly recommended that a copy of the chip is made in the <a href="../blocks/SatelliteAssemblingMachine.php">satellite builder</a> ASAP!
    </p>
    
    <hr>
    <a name="launching"></a>
    <center><h2>Launching the Station</h2></center>
    <img align="left" width="256px" src="../img/stationBuildTutorial_2.png" />
    <p>
    Now that you have the space station container, it must be put into orbit.  To launch the station into orbit, the station container must be placed on a rocket in a satellite bay.  If a guidance computer with a copy of the station chip is placed on the rocket, the rocket will land on the station after inserting it into orbit.  Otherwise the rocket itself will be lost!
    </p>
    <p>
    In addition it is possible for the player to fly to the station upon first launch as well.  In order to do this, the rocket must have the satellite bay with the station container inside, a guidance computer with a copy of the station id chip, and a seat.
    </p>
    <p>Once this is done, all that\'s left is to launch the rocket.  Upon reaching orbit you will now have a shiny new space station!</p>
    
    <hr>
    <a name="modules"></a>
    <center><h2>Adding Modules to a Station (Optional)</h2></center>
    <img align="left" src="../img/stationDockingPort_demo.jpg" />
    <p>There are two main methods of expanding a space station.  One of them, of course, is flying up and placing blocks by hand.  There is another method that may make it easier for automation and placing large segments at a time.</p>
    <p><a href="../blocks/StationDockingPort.php">Station Docking ports</a> provide an excellent method for adding modules to a station.  The usage is fairly simple.  First, place one docking port on the station in orbit and give it a unique name.  Then build the structure you want to connect on the construction pad.  The structure has to contain a station docking port with the Target Id having the string as the one used in the "My Id" textbox on its counterpart in orbit.</p>
    <br><br>
    <p>If the target ID does not match an id assigned to a station docking port on the station, the entire module will be lost when sent to orbit.  It\'s also important to note that the names are case sensative.  Ex: "Port1" is NOT the same as "port1".</p>
    <p>Once you\'ve done that, place a satellite bay into the station builder and the station id chip programmed with the id of the station to which you wish to connect the module.  The chip will not be consumed.</p>
    <p>When the build button on the station builder is pressed, it\'ll build the module, but this time it will only give you a station module.  You must launch the station module onboard another rocket.  When the rocket reaches orbit the module will be rotated such that the station docking port on the module is facing the station docking port already in orbit on the station.</p>
    ';
    
    $infoBarContent = $title.'<hr>
    <h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#basics">Building a Construction Pad</a></li>
    <li><a href="#building">Constucting the Station</a></li>
    <li><a href="#launching">Launching the Station</a></li>
    <li><a href="#modules">Adding Modules To the station</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?> 
