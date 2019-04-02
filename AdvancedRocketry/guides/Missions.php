<?php
    $title = 'Missions';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/rocket_demo.jpg" /><center><h2>Overview</h2></center><p>Missions are a useful undertaking to collect resources and explore.  In Advanced Rocketry missions can be performed to collect ore or harvest gasses from gas giants and return them to your base.</p>
    <p>Missions can be monitored from a <a href="../blocks/RocketMonitoringStation.php">rocket monitoring station</a>.</p>
    <br /><br /><br /><br /><br />
    <hr>
    <center><h2>Asteroid Mining Missions</h2></center>
    <img align="left" src="../img/missionAsteroid.jpg" />
    <p>Asteroid mining missions are a way of gathering ores from space rocks and bringing them back to your base.  In order to conduct an asteroid mining mission the <a href="Rockets.php">rocket</a> must be equipped with one or more item storages, a guidance computer containing an asteroid ID chip that has been <a href="../blocks/Abdp.php">programmed and processed</a> and one or more drills.</p>
    <p>The data programmed into the asteroid ID chip will deterine the success of the mission.  Without enough distance data the rocket could completely miss the target and return empty.  Maxed out distance data will garuntee a successful harvest while having no data garuntees failure.  Any amount in the middle is a gamble.</p>
    <p>Mass data determines how much spoils the rocket will bring back.  Very little mass data will result in a very small harvest while a lot of mass data will garuntee a large return.</p>
    <p>Composition data determines how much useful butter, I mean, ore the rocket will harvest compared to the amount of stone it will pick up.  With a large amount of composition data the rocket will bring back relativly little stone but a lot of ore, whereas having very little composition data will result in bring back a lot of rock.</p>
    <p>Asteroid mining missions take a considerable amount of time to complete.  The amount of time taken can be reduced by adding more drills.</p>
    <hr><center><h2>Gas Harvesting Missions</h2></center>
    <img align="left" src="../img/missionGasMission.jpg" />
    <p>Gas harvesting missions are the primary method of obtaining large amounts of gasses such as oxygen, nitrogen, and hydrogen.  Gas Harvesting missions cannot be performed by standard rockets.  Only craft built in the <a href="../blocks/UnmannedVehicleAssembler.php">unmanned vehicle assembler</a> can be used in gas harvesting missions.</p>
    <p>A gas harvesting mission must be launched from a space station orbiting a gas giant.</p>';
    
    $infoBarContent = $title.'<hr>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
