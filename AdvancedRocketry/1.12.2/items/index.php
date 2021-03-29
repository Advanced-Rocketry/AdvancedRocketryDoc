<?php
    $title = 'Item index';
    
    $mainContent = '<h2>Advanced Rocketry Items</h2>
<br />
<p>Information about items can be found in the following list:<br /></p>
<ul>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/itemUpgrade4.png"> <a href="modularSpaceSuit.php#headcomponents">Anti-Fog Visor</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/stationIdChip.png"> <a href="idChip.php">Asteroid Chip</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/atmosphereAnalyzer.png"> <a href="modularSpaceSuit.php#headcomponents">Atmosphere Analyzer</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePowerSource0.png"> <a href="satellite.php">Basic Solar Panel</a></li>
<!--<li><img class="item-icon" src="/AdvancedRocketry/img/items/basiclasergun.png"> <a href="#">Basic Laser Gun</a></li>-->
<li><img class="item-icon" src="/AdvancedRocketry/img/items/battery1.png"> <a href="satellite.php">Batteries</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/beaconFinder.png"> <a href="modularSpaceSuit.php#headcomponents">Beacon Finder</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction5.png"> <a href="satellite.php">Biome Changer</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/biomeChanger.png"> <a href="biomeChanger.php">Biome Changer Remote</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/itemUpgrade2.png"> <a href="modularSpaceSuit.php#legcomponents">Bionic Leg Upgrade</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/carbonscrubbercartrige.png"> <a href="\AdvancedRocketry\1.12.2\blocks\OxygenScrubber.php">Carbon Collection Cartridge</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction1.png"> <a href="satellite.php">Composition Sensor</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/dataStorageUnit.png"> <a href="datachip.php">Data Storage Unit</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/itemUpgrade1.png"> <a href="modularSpaceSuit.php#headcomponents">Flight Speed Control Upgrade</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/holoProjector.png"> <a href="holoProjector.php">Holo-Projector</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/itemUpgrade0.png"> <a href="modularSpaceSuit.php#headcomponents">Hover Upgrade</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/hovercraft.png"> <a href="#">HoverCraft</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/jackhammer.png"> <a href="#">Jackhammer</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/jetpack.png"> <a href="modularSpaceSuit.php#chestcomponents">Jet Pack</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePowerSource1.png"> <a href="satellite.php">Large Solar Panel</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/linker.png"> <a href="linker.php">Linker</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction2.png"> <a href="satellite.php">Mass Detector</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction3.png"> <a href="satellite.php">Microwave Transmitter</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction0.png"> <a href="satellite.php">Optical Sensor</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satellitePrimaryFunction4.png"> <a href="satellite.php">Ore Mapper</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/oreScanner_icon.png"> <a href="oreScanner.php">Ore Scanner</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/landingboots.png"> <a href="modularSpaceSuit.php#bootcomponents">Padded Landing Boots</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/planetIdChip.png"> <a href="idChip.php">Planet Id Chip</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/pressureTank0.png"> <a href="pressureTank.php">Pressure Tank</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/satellite_icon.png"> <a href="satellite.php">Satellite</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/satelliteIdChip.png"> <a href="idChip.php">Satellite Id Chip</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/sealdetector.png"> <a href="#">Seal Detector</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/elevatorchip.png"> <a href="idChip.php">Space Elevator Chip</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/stationIdChip.png"> <a href="idChip.php">Space Station Id Chip</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/space_chestplate.png"> <a href="modularSpaceSuit.php">Space Suit</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/thermite.png"> <a href="#">Thermite</a></li>
<li><img class="item-icon" src="/AdvancedRocketry/img/items/trackingcircuit.png"> <a href="#">Tracking Circuit</a></li>
</ul>';
    
    $infoBarContent = ' Index of Advanced Rocketry Items';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?>