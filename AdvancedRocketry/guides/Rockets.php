<?php
    $title = 'Rockets - Journey to the Moon';
    
    $mainContent = '<h2>'.$title.'</h2><hr><center><h2>Overview</h2></center><img align="left" src="../img/rocket_demo.jpg" /><p>Rockets are key to your space program\'s success. They can act as cargo shuttles, launch satellites, go on mining missions and transport you to a planet\'s moon and back. But its not as easy as plopping down a few blocks and pressing a button. The rocket will need to be assembled, fueled, launched and recovered.</p>

    <hr><center><h2>Assembly</h2></center>
    <p>What good is a space program without some fancy platforms for building and launching rockets? Advanced Rocketry provides launch pads for this purpose. The launch pad is where you will assemble, load/unload and launch your rockets. See the <a href="../blocks/LaunchPad.php" >launch pads</a> page for specifications on how to build the launch pad.</p>
    <p>Once you have a launch pad, you will need to place a <a href="../blocks/RocketAssemblingMachine.php">rocket assembling machine</a>. This machine verifies your rocket build to make sure it has enough thrust and fuel for its weight. It needs power and it needs to be placed one block higher than the launch pad.</p>
    <p>Now, we can finally begin to build the rocket. There are a few things to consider before we begin, after all, this IS rocket science.
    <ol>
        <li>Every block you put on your rocket has a mass and more mass requires more thrust to escape the planet\'s gravity well.</li>
        <li>Fuel is required for any rocket transport. Be sure you have enough fuel to make it back home.</li>
        <li>A successful build requires a balance between mass, thrust, and fuel carrying capability.</li>
        <li>Rockets can only fly between a planet and its moon, or much later, a space station and other planetary beings. A rocket CANNOT transport from planet to planet.</li>
    </ol>
    <p>In order to fly however a rocket must have <a href="../blocks/RocketEngine.php">engines</a>.  Engines provide thrust and consume fuel.  </p>
    <p>The engines require some amount of fuel to run, fuel can be carried in <a href="../blocks/FuelTank.php">fuel tanks</a> built on the rocket.</p>
    <p>A successful build requires a balance between mass, thrust, and fuel carrying capability.  Rockets can be verified and built in the <a href="../blocks/RocketAssemblingMachine.php">rocket assembling machine</a>.</p>
    <hr>
    <img align="left" src="../img/rocket_gui.png" />
    <center><h2>Interaction</h2></center>
    <p>The interface on a rocket is fairly simple to navigate, the player\'s inventory is in the bottom left and accessible blocks built onto the rocket are in the top left.  Most inventories, such as chests and furnaces, built into the rocket can be accessed via this panel by clicking on the icon of the block.</p><br /><br />
    <p>The fuel bar on the top right displays the amount of fuel currently in the rocket.  If the rocket has a guidance computer with a planet ID chip inside, the select Dst button will bring up a screen of the local planet system and allow selection of the destination planet.  The "Dissassemble" button will convert the rocket back into blocks, but careful, you need a <a href="../blocks/RocketAssemblingMachine.php">rocket assembling machine</a> to reassemble the rocket again!</p>
    <hr>
    <center><h2>Usage</h2></center>
    <p>There are three major uses for rockets in Advanced Rocketry: Player Transport, Cargo Transport, and Satellite/Space Station launches.</p>
    <p><h3>Player Transport</h3>
    Players can ride rockets to different planets and rockets are the only way to get to orbiting space stations.  To be able to ride a rocket, the rocket must have a <a href="../blocks/GuidanceComputer.php">guidance computer</a> with some destination programmed into it with a chip and a <a href="../blocks/Seat.php">seat</a>.  Once assembled and fueled, a player can right click on the rocket to ride it and press space to take off.</p>
    <h3>Cargo Transport</h3>
    <p>Rockets can also be used to transport cargo between bodies in a planet moon system.  To be used for cargo, a rocket must be have some number of chests or fluid tanks and a <a href="../blocks/GuidanceComputer.php">guidance computer</a>.  A static shipping route can be set up by linking two <a href="../blocks/LandingPad.php">landing pads</a> together with <a href="../items/linker.php">linkers</a>.</p>
    <h3>Payload Launch</h3>
    <p>Rockets can also be used to send payloads to space.  Rockets are the only way to launch <a href="../items/satellite.php">satellites</a> and space station modules which can be built by the <a href="../blocks/StationBuilder.php">Station Builder</a>).  To launch a space station module or satellite the rocket requires only a <a href="../blocks/SatelliteHatch.php">satellite bay</a> containing the payload.  Multiple payloads can be launched on a single rocket.</p>
    <hr>
    <center><h2>Infrastructure</h2></center>
    <p>There are various different infrastructures that can interact with rockets to perform a vareity of useful tasks.  infrastructure can be connected directly to a rocket, <a href="../blocks/RocketAssemblingMachine.php">rocket assembling machine</a>, <a href="../blocks/UnmannedVehicleAssembler.php">unmanned vehicle assembler</a>, or a <a href="../blocks/LandingPad.php">landing pad</a> using the <a href="../items/linker.php">linker</a>.</p>
    <ul style="padding-left: 5px">
    <li><a href="../blocks/Hatches.php">Loaders and unloaders</a> can be used to load and unload items and fluids from a stationary rocket.</li>
    <li><a href="../blocks/FuellingStation.php">Fueling stations</a> are used to fuel rockets without having to manually bucket fuel in.</li>
    <li><a href="../blocks/RocketMonitoringStation.php">Monitoring Stations</a> can be used to launch a rocket as well as monitor its progress in flight or on a mission.</li>
    </ul>';
    
    $infoBarContent = $title.'<hr>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex.php');
?> 
