<?php
    $title = 'Commands';
    
    $mainContent = '<h1>'.$title.'</h1><hr><p>List of commands provided by Advanced Rocketry as of 0.8.1 unless otherwise specified:</p>
    <p>
    <ul>
    <li><b>/advancedRocketry help</b>: Prints a list of commands.</li>
    <li><b>/advancedRocketry goto [dimid]</b>: Teleports the player executing the command to the given dimension at the same coordinates (It may stick you in a wall!!!).
    <li><b>/advancedRocketry goto station [stationId]</b>: Teleports the player executing the command to the spawn point of the station passed in the command.
    <li><b>/advancedRocketry fetch [playerName]</b>: Brings the specified player to your current coordinates and dimension.
    <li><b>/advancedRocketry planet delete [dimid]</b>: Deletes the specified dimension and its moons, but does NOT delete the world files on disk.</li>
    <li><b>/advancedRocketry planet generate [name] [atmosphere randomness] [distance Randomness] [gravity randomness] (atmosphere base) (distance base) (gravity base)</b>: Creates a planet with the specified name and properties as follows: atmosphere = atmosphere base +/- atmosphere randomness, distance = distance base +/- distance randomness, gravity = gravity base +/- gravity randomness.  If no base is specified than overworld-like base is used.x</li>
    <li><b>/advancedRocketry planet generate gas [name] [atmosphere randomness] [distance Randomness] [gravity randomness] (atmosphere base) (distance base) (gravity base)</b>: Creates a Gas Giant with the specified properties.  Gas Giants cannot be landed on, but this may mean something in the future.</li>
    <li><b>/advancedRocketry planet list</b>: Lists the dimension names and their IDs to chat.</li>
    <li><b>/advancedRocketry planet reset</b>: Resets the dimension the player is currently on to a global default</li>
    <li><b>/advancedRocketry planet reset [dimid]</b>: Resets the dimension specified to a global default</li>
    <li><b>/advancedRocketry planet set [property] ...</b>: sets a property of the planet that the player is currently on</li>
        <ul>
        <li>atmosphereDensity [integer]: how thick the atmosphere is; determines fog thickness and atmosphere type. (100 being overworld-like)</li>
        <li>averageTemperature [integer]: how hot the planet is; determines the biomes that spawn.</li>
        <li>fogColor [decimal RED] [decimal GREEN] [decmial BLUE]: color of the fog.</li>
        <li>gravitationalMultiplier [decimal]: how strong the gravity on the planet is (1.0 being overworld-like).</li>
        <li>orbitTheta [decimal]: angular position in orbit with respect to the orbiting body.</li>
        <li>orbitalDist [integer]: orbital distance with respect to the orbiting body.</li>
        <li>rotationalPeriod [integer]: how long the day night cycle is in ticks.</li>
        <li>skyColor [decimal RED] [decimal GREEN] [decmial BLUE]: Color of the sky.</li>
        </ul>
    <li><b>/advancedRocketry planet get [property]</b>: prints the specified property (see /advancedRocketry planet set) to console of the planet that the player is currently on</li>
    </ul>
    </p>';
    
    $infoBarContent = $title.'<hr>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
