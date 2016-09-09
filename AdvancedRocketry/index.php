<?php
    $title = 'Advanced Rocketry';
    
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
<h3>0.8.1 (Upcoming)</h3>
<ul>
<li>Backward Compatibility: Create Gas Giants in worlds made in previous versions of AR</li>
</ul>
<h3>0.8.0</h3>
<ul>
<li>Added Gas Giants and Gas Giant Mining</li>
<li>Added <a href="blocks/UnmannedVehicleAssembler.php">Unmanned Vehicle Assembler</a></li>
<li>Added <a href="blocks/Terraformer.php">Terraformer</a></li>
<li>Added <a href="items/modularSpaceSuit.php#foggles">Anti-Fog visor</a></li>
<li>Added Titanium Aluminide</li>
<li>Added recipe for bonemeal in the chemical reactor</li>
<li>Added Nitrogen</li>
<li>Added Buckets for Oxygen, Nitrogen, and Hydrogen</li>
<li>Added <a href="items/modularSpaceSuit.php#atmAnalyser">Atmosphere Analyser</a></li>
<li>Added sounds</li>
<li>Mobs now take damage from the vacuum</li>
<li>Added Biome Changer Satellite and <a href="items/biomeChanger.php">Biome Changer Satellite Remote</a></li>
<li>Increased planet variety</li>
<li>Infrastructure can now be linked to Docking Pads which will in turn link to any rocket that lands on the Docking Pad</li>
<li>New algorithm for warp fuel calculations</li>
<li>Redid Fog effect for planets (again)</li>
<li><a href="blocks/Hatches.php">Rocket fluid loader and fluid unloader</a></li>
<li>Rockets can now be automated to fly between destinations using <a href="blocks/DockingPad.php">Docking Pads</a></li>
<li><a href="blocks/DockingPad.php">Docking Pads</a> now accept <a href="items/linker.php">linkers</a> as an item</li>
<li><a href="items/holoProjector.php">Holo-Projector</a> now will align the hologram to a machine when used to rightclick a machine control block
<li>Fixed warp effect not working in multiplayer sometimes</li>
<li>Fixed solar satellites not being created properly</li>
<li>Fixed graphics on pipes/Microwave Reciever not being shaded</li>
<li>Fixed the delete satellite button not updating the itemstack on the server</li>
<li>Fixed laser drill missing texture</li>
<li>Now Requires LibVulpes 0.1.2</li>
</ul>
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
    
    $infoBarContent = '';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
