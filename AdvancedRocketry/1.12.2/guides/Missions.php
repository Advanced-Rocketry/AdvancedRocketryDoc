<?php
    $title = 'Mission Control';
    
    $mainContent = '<h2>'.$title.'</h2><hr><center><h2>Overview</h2></center><img align="left" src="/AdvancedRocketry/img/rocket_demo.jpg" /><p>Missions are a useful undertaking to collect resources and explore.  In Advanced Rocketry missions can be performed to collect ore or harvest gasses from gas giants and return them to your base. Missions can be monitored from a <a href="../blocks/RocketMonitoringStation.php">rocket monitoring station</a>. However, before a rocket can mine an asteroid or harvest gas from a planet, one has to be found. To locate other planetary bodies, you will need satellites to collect data.</p>
    <br><br>
    <a name="satellites"></a>
    <hr>
    <center><h2>Satellites and Data</h2></center>
    <p>Currently, there are three types of data  satellites can gather, Mass, Distance and Composition. The first satellite you should build/launch is one that gathers distance data. The reason will be explained later.</p><p> Satellites are built in the <a href="../blocks/SatelliteAssemblingMachine.php">Satellite Assembling Machine.</a> The <a href="../items/satellite.php"> Satellites</a> page details the components you can put into the Satellite Assembling Machine and those components specify what function the satellite will serve or what data it will collect. Be sure to keep the satellite id chip handy and for good measure make a copy.</p>
    <p>Before you can launch your satellite, there are two more actions which need to be taken. You will need a <a href="../blocks/SatelliteTerminal.php">Satellite Terminal</a> to retrieve the data from the satellite. These can be placed anywhere, and looks really cool when you have a wall of Satellite Terminals and Rocket Monitoring Systems. Your very own Command Center.</p><p>The second action should be to build a <a href="../blocks/SatelliteHatch.php">Satellite Bay</a> into your rocket. Build your rocket, shift-click to bring up the rocket GUI, select the satellite bay and place the satellite in the slot. When you launch the rocket, the satellite will be deployed in orbit.</p>
    <a name="observatory"></a>
    <hr>
    <center><h2>The Observatory</h2></center>
    <p>The <a href="../blocks/Observatory.php">Observatory</a> is responsible for finding asteroids and programming <a href="../items/idChip.php">asteroid id chips</a> using distance data gathered from satellites. Getting distance data early gives you an early start to asteroid mining.</p>
    <p>Using the satellite id chip from earlier in the Satellite Terminal, you can connect and download the data onto a <a href="../items/datachip.php">data chip</a>, which looks like a little green thumbdrive. Take a data chip with distance data and insert it into the data bus on the Observatory and \'Store to Buffer\'. The Observatory will use 100 distance data to scan for nearby asteroids. You can now program an asteroid id chip with the location of a desired mining asteroid. More information on the <a href="../blocks/Observatory.php">Observatory</a> page.</p>
    <a name="abdp"></a>
    <hr>
    <center><h2>The ABDP</h2></center>
    <p>The final piece in managing your data is the <a href="../blocks/ABDP.php">Astrobody Data Processor</a> or ABDP. The purpose of this machine is to process all incoming data into asteroid ID chips for more efficient and richer mining excursions. Data will need to be either inserted manually by way of data chips or via <a href="../blocks/WirelessTransciever.php">Wireless Transcievers</a>. To make efficient use of these, you will need 6, two for each data type. 1 attached to a data bus on the ABDP the other attached to a Satellite Terminal connected to a satellite of the corresponding data type. This is a 1:1 mechanic.</p>
    <p>Once you have collected a decent amount of all three data types, they can be downloaded into an asteroid id chip by using the research buttons associated with the data type you wish to download. the benefits of including more data in the asteroid chip is explained below.
    <a name="asteroidmining"></a>
    <hr>
    <center><h2>Asteroid Mining Missions</h2></center>
    <img align="left" src="/AdvancedRocketry/img/missionAsteroid.jpg" />
    <p>Asteroid mining missions are a way of gathering ores from space rocks and bringing them back to your base.  In order to conduct an asteroid mining mission the <a href="Rockets.php">rocket</a> must be equipped with one or more item storages, a guidance computer containing an asteroid ID chip that has been <a href="../blocks/Abdp.php">programmed and processed</a> and one or more drills.</p>
    <p>The data programmed into the asteroid ID chip will determine the success of the mission.  Without enough distance data the rocket could completely miss the target and return empty.  Maxed out distance data will guarantee a successful harvest while having no data guarantees failure.  Any amount in the middle is a gamble.</p>
    <p>Mass data determines how much spoils the rocket will bring back.  Very little mass data will result in a very small harvest while a lot of mass data will guarantee a large return.</p>
    <p>Composition data determines how much useful butter, I mean, ore the rocket will harvest compared to the amount of stone it will pick up.  With a large amount of composition data the rocket will bring back relatively little stone but a lot of ore, whereas having very little composition data will result in bring back a lot of rock.</p>
    <p>Asteroid mining missions take a considerable amount of time to complete.  The amount of time taken can be reduced by adding more drills.</p>
    <a name="gasmining"></a>
    <hr><center><h2>Gas Harvesting Missions</h2></center>
    <img align="left" src="/AdvancedRocketry/img/missionGasMission.jpg" />
    <p>Gas harvesting missions are the primary method of obtaining large amounts of gasses such as oxygen, nitrogen, and hydrogen.  Gas Harvesting missions cannot be performed by standard rockets.  Only craft built in the <a href="../blocks/UnmannedVehicleAssembler.php">unmanned vehicle assembler</a> can be used in gas harvesting missions.</p>
    <p>A gas harvesting mission must be launched from a space station orbiting a gas giant.</p>
    <p>Gas mining missions are the easiest way to refuel your rocket on the go while on the space station, often allowing a single stop at a gas giant to acquire more than enough rocket fuel for a while. They are extremely net positive on gas, and the only way to obtain nitrogen for terraforming planets within Advanced Rocketry itself. Once you have a space station, it is often easier to run a couple of gas mining missions and store the results for late fuel processing than to electrolyse water for hydrogen and oxygen</p>';
    
    $infoBarContent = '<h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#satellites">Satellites and Data</a></li>
    <li><a href="#observatory">Observatory</a></li>
    <li><a href="#abdp">Astrobody Data Processor</a></li>
    <li><a href="#asteroidmining">Asteroid Mining</a></li>
    <li><a href="#gasmining">Gas Harvesting</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?> 
