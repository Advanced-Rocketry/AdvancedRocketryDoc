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
<h3>1.0.0</h3>
<ul>
<li>Added <a href="concepts/OreConfiguration.php">XML config</a> for ore generation on different planet types</li>
<li>Added config to add more harvestable fluids in gas giants</li>
<li>Added tags to the <a href="concepts/AdvancedPlanetConfiguration.php">Advanced Planet generation XML</a> to allow manually specifying <a href="concepts/AdvancedPlanetConfiguration.php#dimId">DIMID</a> and <a href="concepts/AdvancedPlanetConfiguration.php#dimMapping"> mapping dims</a> from other mods as planets (including GC planets)</li>
<li>Satellites can now be accessed from space stations orbiting the same planet as the satellite</li>
<li>Sky colors now differ on newly generated planets</li>
<li>Planets may now rotate along their own axis</li>
<li>Added four stars to generate by default</li>
<li>Sealing and oxygenating a room on planets with heavy atmospheres now removes the fog indoors</li>
<li>Artifical atmospheres now show up as "pressurizedAir"</li>
<li>Fixed a few small desyncs with the warp controller</li>
<li>Beds no longer explode on other planets</li>
<li>Added <a href="blocks/Railgun.php">Railgun</a></li>
<li>Added <a href="concepts/RecipeConfiguration.php">XML Recipe modification</a> support</li>
<li>Fixed memory leak that can occur while logging in a out frequently</li>
<li>Added planet orbital mechanics</li>
<li>Added solar eclipses</li>
<li>Nerfed Max returns of an asteriod mining mission from 20k+ stacks to 100 stacks of ore</li>
<li>Added the /advRocketry filldata command</li>
<li>Added capability for multiple star systems and commands for manipulating stars</li>
<li>Putting a station id chip in a guidance computer while launching a station no longer sticks the rocket inside the station</li>
<li>Requires LibVulpes 0.1.6</li>
<li><a href="items/holoProjector.php">Holo Projector</a> now displays amounts and types of blocks needed to build a structure</li>
<li>Rockets now display errors when ridden and unable to launch</li>
<li>Rockets can only travel within planet moon systems now, use warp to go to other planets</li>
<li>Added config to make orbital laser not destroy the world, laser no longer mines world by default</li>
<li>Added config to set valid oredict entries for ores when laser is in non-destructive mode</li>
<li><a href="blocks/LaserDrill.php">Orbital laser</a> is now a multiblock structure</li>
<li>Fixed off-by-one error causing suffocation near walls in sealed rooms</li>
<li>Fixed suffocation while standing near IC2 or enderIO pipes in a sealed room</li>
<li>Fixed Space Station Modules being placed facing backward</li>
<li>[MC 1.10.2] Fix inventory checks being ignored globally</li>
<li>[MC 1.10.2] Fix packet leak when in single player</li>
<li>[MC 1.10.2] Fixed issue where the holo projector would sometimes not show the structure due to Player entity not being in the entity list</li>
<li>[MC 1.10.2] Orbital laser no longer crashed the game when breaking the block</li>
<li>[MC 1.10.2] Orbital laser actually functions now</li>
<li>[MC 1.10.2] Fixes certain configurations with the seat causing player to spawn under bedrock on dismount</li>
<li>[MC 1.10.2] Fixed duplicate packet execution.
<li>[MC 1.7.10] Fix incorrect Geode generation</li>
</ul>
<h3>0.9.1</h3>
<ul>
<li>Requires LibVulpes 0.1.5</li>
<li>Added Altitude Controller (allows modification of Altitude of space stations, simply by placing in a station and opening the interface)</li>
<li>Fix bug with Blast Furnace where in rare circumtances can have the machine form on the server but not the client</li>
<li>Hopefully fix a bug where the holo projector causes a crash</li>
</ul>
<h3>0.9.0</h3>
<ul>
<li>Requires LibVulpes 0.1.4</li>
<li>[Mc 1.10.2] AR blocks will now properly take power from other mod\'s blocks</li>
<li>Redstone states for rocket infrastructure</li>
<li>Geodes now spawn the same ore as can be collected by asteriod missions (which in turn is configurble)</li>
<li>Added Achievments</li>
<li>Added <a href="blocks/Cables.php">Fluid Pipes</a></li>
<li>[MC 1.7.10] Added <a href="blocks/Cables.php">energy pipes</a> and generators</li>
<li>[MC 1.7.10] Game will no longer crash without an RF mod</li>
<li>Generators now display amount of power being produced</li>
<li><a href="blocks/StationBuilder.php">Station Builder</a> can now assemble station modules, which can be sent up to attach to existing stations</li>
<li>Fixed issue where invalid blocks for titanium aluminide show up in NEI (and possibly JEI)</li>
<li>Hopefully fix bug where rocket vanishes on client when going to space stations</li>
<li>Fix NPE with <a href="items/holoProjector.php">holo projector</a></li>
<li>[Mc 1.10.2] Fix crash when placing data cables next to energy cables</li>
<li>Fixed nasty bug where some space stations over ID 3 return the wrong id from block coords</li>
<li>Fixed <a href="items/oreScanner.php">Ore Scanner</a> Being uncraftable</li>
</ul>
<h3>0.8.5</h3>
<ul>
<li>Fixed not being able to warp to moons from same planet</li>
<li>Fixed incorrect usage of fuel when clicking warp while already in warp</li>
<li>Fixed generating a world with a bonus chest causing a crash</li>
<li>Added BlackList for SpaceLaser</li>
<li>Fixed untextured blocks for space laser</li>
<li>Increased the default amount of power generated by the microwave reciever by x10</li>
<li>[MC 1.7.10] Thermos support courtesy of RecursiveG</li>
</ul>
<h3>0.8.4</h3>
<ul>
<li>Config for laser drill power multiplier</li>
<li>Small bugfixes</li>
</ul>
<h3>0.8.3</h3>
<ul>
<li>Added config option for blacklisting biomes to prevent them from spawning on planets</li>
<li>Added config option to prevent any vanilla biomes from spawning on planets</li>
<li>Added config option to register high pressure biomes</li>
<li>Added config option to register biomes that span entire worlds</li>
<li>[MC 1.7.10] Powersuits now also protect from the vacuum of space</li>
<li>Upon Death player should spawn in overworld, preventing infinite death loops</li>
<li>[MC 1.7.10] Fixed bug causing the first space station to be built being assigned an invalid number</li>
<li>Fix warp controller causing crash if placed in world</li>
<li>[MC 1.10.2] Fixed glow affect for space suit HUD not working</li>
</ul>
<h3>0.8.2</h3>
<ul>
<li>Added Decorative light</li>
<li>Fixed rare bug where client would crash when going between worlds</li>
<li>Optimized Rocket renders with GLLists</li>
<li>Data pipes can now pull data from Satellite Terminal with requiring the connect button to be pressed, now allows fully automated Data harvesting</li>
<li>Added more stars</li>
<li>Fixed Sun being out in the rain</li>
<li>[MC 1.10.2] Added <a href="blocks/SolarGenerator.php">Solar Generators</a></li>
<li>[MC 1.10.2] Added <a href="blocks/Cables.php">Energy cables</a> and implementing Forges Energy system to replace the... lack of energy systems in 1.10</li>
<li>[MC 1.10.2] Added Coal generators (takes anything that\'ll burn in a furnace</li>
</ul>
<h3>0.8.1</h3>
<ul>
<li>Backward Compatibility: Create Gas Giants in worlds made in previous versions of AR</li>
<li>Fix Dilithium not generating on galacticraft\'s moon</li>
<li>Fix crash caused by unregistering gas giant dimensions</li>
<li>Reduced the amount of smoke in large rockets</li>
<li>Added config to increase output of MicrowaveRecievers</li>
<li>Fixed crash involving blocks that do not properly return an itemstack in the rocket GUI</li>
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
