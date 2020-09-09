<?php
    $title = '/AdvancedRocketry - Journey to the Moon';
    
    $mainContent = '<h2>'.$title.'</h2><hr><center><h2>Overview</h2></center><img align="left" src="/AdvancedRocketry/img/rocket_demo.jpg" /><p>/AdvancedRocketry are key to your space program\'s success. They can act as cargo shuttles, launch satellites, go on mining missions and transport you to a planet\'s moon and back. But its not as easy as plopping down a few blocks and pressing a button. The rocket will need to be assembled, fueled, launched and recovered.</p>
    <br><br><br>
    <a id="assembly"></a>
    <hr><center><h2>Assembly</h2></center>
    <p>What good is a space program without some fancy platforms for building and launching /AdvancedRocketry? Advanced Rocketry provides launch pads for this purpose. The launch pad is where you will assemble, load/unload and launch your /AdvancedRocketry. See the <a href="/AdvancedRocketry/1.12.2/blocks/LaunchPad.php" >launch pads</a> page for specifications on how to build the launch pad.</p>
    <p>Once you have a launch pad, you will need to place a <a href="/AdvancedRocketry/1.12.2/blocks/RocketAssemblingMachine.php">rocket assembling machine</a>. This machine verifies your rocket build to make sure it has enough thrust and fuel for its weight. It needs power and it needs to be placed one block higher than the launch pad.</p>
    <p>Now, we can finally begin to build the rocket. There are a few things to consider before we begin, after all, this IS rocket science.
    <ol>
        <li>Every block you put on your rocket has a mass and more mass requires more thrust to escape the planet\'s gravity well.</li>
        <li>Fuel is required for any rocket transport. Be sure you have enough fuel to make it back home.</li>
        <li>A successful build requires a balance between mass, thrust, and fuel carrying capability.</li>
        <li>/AdvancedRocketry can only fly between a planet and its moon, or much later, a space station and other planetary beings. A rocket CANNOT transport from planet to planet.</li>
    </ol>
    <p>A rocket can be built from any block in the game but must contain a number of <a href="/AdvancedRocketry/1.12.2/blocks/RocketEngine.php">Engines</a> and <a href="/AdvancedRocketry/1.12.2/blocks/FuelTank.php">Fuel Tanks</a>. Engines provide thrust, and the number of engines needed is based on the mass. They also consume fuel, which is stored in the fuel tanks. There must be enough fuel tanks to hold the amount of fuel needed for any mission. Other blocks can be added to increase functionality, see below.</p><p>When you have finished building your rocket, you will need to use the <a href="/AdvancedRocketry/1.12.2/blocks/RocketAssemblingMachine.php">rocket assembling machine</a> to verify and build it. Scanning a build determines if you have the right number of engines and fuel tank to make a successful trip. Once you have verified a successful build, the rocket can be built. The rocket is not a rocket until it is built, otherwise its just a collection of blocks. Once a rocket is built, you can interact with it.
    <a id="interaction"></a>
    <hr>
    <center><h2>Interaction</h2></center>
    <img width=40% align="left" src="/AdvancedRocketry/img/rocket_gui.png" />
    <p>The interface on a rocket is fairly simple to navigate, the player\'s inventory is in the bottom left and accessible blocks built onto the rocket are in the top left.  Most inventories, such as chests and furnaces, built into the rocket can be accessed via this panel by clicking on the icon of the block.</p>
    <p>The fuel bar on the top right displays the amount of fuel currently in the rocket.  If the rocket has a guidance computer with a planet ID chip inside, the select Dst button will bring up a screen of the local planet system and allow selection of the destination planet.  The "Dissassemble" button will convert the rocket back into blocks, but careful, you need a <a href="/AdvancedRocketry/1.12.2/blocks/RocketAssemblingMachine.php">rocket assembling machine</a> to reassemble the rocket again!</p>
    <a id="fueling"></a>
    <hr>
    <center><h2>Fueling and Launching</h2></center>
    <p>There are three major uses for /AdvancedRocketry in Advanced Rocketry: Player Transport, Cargo Transport, and Satellite/Space Station launches. There are also a number of blocks, referred to as Infrastructures, which interact with the /AdvancedRocketry and aid in their use. To understand how to use a rocket, you must understand how these Infrastructures work.</p>
    <h4>Infrastructures</h4>
    <p>Let\'s look at how to fuel/refuel the rocket to best understand how these Infrastructures work. The <a href="/AdvancedRocketry/1.12.2/items/linker.php">linker</a> is your best friend. It connects the rocket to the various infrastructures. Later, you can expand this idea and connect the infrastructures to a <a href="/AdvancedRocketry/1.12.2/blocks/LandingPad.php">docking pad</a> and any rocket using the docking pad will be linked to the infrastructures as well. More on this in <a href="/AdvancedRocketry/1.12.2/guides/BuildingSpaceStation.php">Intergalactic Travel.</a></p><p>To fuel a rocket you can either bucket the rocket fuel in. A better alternative, is to use a <a href="/AdvancedRocketry/1.12.2/blocks/FuellingStation.php">Fueling Station</a>. Once you have the fueling stations set-up and filled with rocket fuel, shift-right-click the fuelling station with the Linker, then shift-right-click a rocket. If the linked is done successfully, a dotted white line should appear from the fuelling station to the rocket, and the rocket will begin filling with fuel. As long as that rocket remains built, it will remain connected to linked infrastructure, and in this case, will re-fuel itself upon landing if there is fuel available in the fuelling station.</p>
    <p><i><h6>*Pro-tip: Putting a guidance computer on a rocket with an Earth ID-chip will ensure it returns to its launch pad on Earth and thus retains its connected infrastructure.</h6></i></p>
    <p>The rocket is fueled and now we need to launch it. This requires a <a href="/AdvancedRocketry/1.12.2/blocks/RocketMonitoringStation.php">Rocket Monitoring Station</a>, an infrastructure which not only launches a linked rocket but also tracks its flight and <a href="/AdvancedRocketry/1.12.2/guides/Missions.php">mission</a> progress. The truly awesome thing about these machines is there range is unlimited. So you can build a nice look-out with an incredible view of your launch pad and watch your rocket blast off into space!! (need pictures).</p>
    <a id="usage"></a>
    <hr>
    <center><h2>Usage</h2></center>
    <p>"I can build, fuel and launch /AdvancedRocketry, but for what purpose? What can I REALLY do with these things?" FLY TO THE MOON, of course! But not only that you can launch satellites, mine distant asteroids and travel between a planet and its moon. Outlined below are the needed infrastructre to carry out these purposes.
    <p><h4>Player Transport</h4>
    Players can ride /AdvancedRocketry to different planets and /AdvancedRocketry are the only way to get to orbiting space stations.  To be able to ride a rocket, the rocket must have a <a href="/AdvancedRocketry/1.12.2/blocks/GuidanceComputer.php">guidance computer</a> with some destination programmed into it with a chip and a <a href="/AdvancedRocketry/1.12.2/blocks/Seat.php">seat</a>.  Once assembled and fueled, a player can right click on the rocket to ride it and press space to take off.</p>
    <h4>Cargo Transport</h4>
    <p>/AdvancedRocketry can also be used to transport cargo between bodies in a planet moon system.  To be used for cargo, a rocket must be have some number of chests or fluid tanks and a <a href="/AdvancedRocketry/1.12.2/blocks/GuidanceComputer.php">guidance computer</a>.  A static shipping route can be set up by linking two <a href="/AdvancedRocketry/1.12.2/blocks/LandingPad.php">landing pads</a> together with <a href="/AdvancedRocketry/1.12.2/items/linker.php">linkers</a>.</p>
    <h4>Payload Launch</h4>
    <p>/AdvancedRocketry can also be used to send payloads to space.  /AdvancedRocketry are the only way to launch <a href="/AdvancedRocketry/1.12.2/items/satellite.php">satellites</a> and space station modules which can be built by the <a href="/AdvancedRocketry/1.12.2/blocks/StationBuilder.php">Station Builder</a>).  To launch a space station module or satellite the rocket requires only a <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteHatch.php">satellite bay</a> containing the payload.  Multiple payloads can be launched on a single rocket.</p>
    <a id="moon"></a>
    <hr>
    <center><h2>TO THE MOON!!</h2></center>
    <p>If you\'ve been following along, you are now ready for that Buzz Lightyear... er ... I mean ... Buzz Aldrin moment of stepping foot on the moon. For a quick rundown: </p>
    <ol style="padding-left: 5px">
    <li>Build a Rocket</li>
    <li>Include a <a href="/AdvancedRocketry/1.12.2/blocks/GuidanceComputer.php">guidance computer</a> and a <a href="/AdvancedRocketry/1.12.2/blocks/Seat.php">seat</a>.</li>
    <li>Fuel the Rocket</li>
    <li>Put on oxygen-filled <a href="/AdvancedRocketry/1.12.2/items/modularSpaceSuit.php">Spacesuit</a></li>
    <li>Enter the Rocket, hit \'C\' for rocket menu (check keybindings)</li>
    <li>Select Luna from Destinations</li>
    <li>Hit \'Spacebar\' to BLAST OFF!!</li>
    </ol>';
    
    $infoBarContent = '<h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#assembly">Assembly</a></li>
    <li><a href="#interaction">Interaction</a></li>
    <li><a href="#fueling">Fueling and Launching</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#moon">To The Moon</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?> 
