<?php
    $title = 'index';
    
    $mainContent = '<h2>Advanced Rocketry Documentation</h2>
<br />
<p>&nbsp;&nbsp;&nbsp; Welcome to the documentation page for Advanced
Rocketry!&nbsp; The mod is still in alpha and should be entering beta
soon.</p>
<p>Advanced Rocketry is a Minecraft mod designed to add random or
player specified planets to the game.&nbsp; These planets each have
unique properties such as Atmosphere Density, Distance from the sun,
Atmosphere composition, Average Temperature, and size.&nbsp; Players
can build rockets out of blocks to travel to these other worlds.<br />
</p>
<hr>
<h2>What\'s New?</h2>
<h3>0.7.0</h3>
<ul>
<li>Implemented <a href="items/modularSpaceSuit.php">Modular space suits</a></li>
<li>Added Jetpack</li>
<li>Added Bionic Legs</li>
<li>Moved multiblock blocks/items to a new item group in creative</li>
<li>Added Aluminum</li>
<li>Added <a href="items/pressureTank.php">pressure tanks</a></li>
<li>Oxygen Charger renamed to <a href="blocks/gasCharger.php">Gas Charger</a></li>
<li>Gas Charger now can fill hydrogen tanks in spacesuits</li>
<li><font color="#990000">Massive Refactor of code!  May require liquid/data/satellites hatches to be replaced!</font></li>
</ul>
<h3>0.6.8</h3>
<ul>
<li>Fixed Rockets being stuck in the air on space stations</li>
<li>Fixed O2 detectors having the wrong name</li>
<li>Fixed low gravity being missing in space</li>
<li>Added <a href="./blocks/LaserDrill.php">Laser Drill</a></li>
<li>Added <a href="./blocks/MicrowaveReciever.php">Microwave Reciever</a></li>
<li>Overhauled textures for planets as viewed from space stations</li>
<li>Fixed warp not working half the time in single player</li>
<li>Fixed planet information not being displayed in the planet selector interface</li>
<li>Actual documentation for some of the mod on this site</li>
</ul>';
    
    $infoBarContent = 'infoBarContent';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>