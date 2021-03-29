<?php
    $title = 'Native Advanced Rocketry Planet Configuration';
    
    $mainContent = '<h2>'.$title.'</h2><hr><center><h2>Overview</h2></center><p>Many packs have Advanced Rocketry in them, but few even use all of Advanced Rocketry\'s default options, let alone all of the other things that can be done with ohter mods. This guide will cover using some of the basic and advanced options within Advanced Rocketry only to enhance planets in a pack\'s setting and to make them worthwhile to explore for the average player, both in a relatively kitchen-sink pack and in a more advanced pack.</p>
    <br><br>
    <a name="biomes"></a>
    <hr>
    <center><h2>Biomes</h2></center>
    <p>What biomes you pick are going to be the centerpiece of the theming and feel of any planet you make. They control whether the planet feels like a hostile, barren wasteland or an inviting paradise, or somewhere in between. Because of how biome generation works withing planets and Minecraft itself, you\'ll want to pick biomes close in climate to each other because, like the default Vanilla overworld, there isn\'t very good temperature or humidity checking, especially if there are only a few biome types.</p>
    <p>At a more advanced level, biomes also determine what resources might generate on this planet. They can control resources that only generate in specific biomes normally, or they can become havens for specific resources added to make them more intersting. Consider making barren, lifeless planets not have coal or dirt, as they would never have formed, and adding instead an excess of metallic ores to make up the difference, or any other specific resource. It\'s generally advised to pick biomes based on the temperature of the planet, which can either be calculated, or found in the planetDefs.xml file in a generated world. This avoids wierd incongruities such as having a desert world far enough out from a star it should be snowing with its atmosphere condensed into liquid seas, and vice versa with iceworlds that should be Venusian. Temperature varies based on star temperature, size, planetary distance, and planetary atmosphere, so desert worlds could populate the inner orbits of a large star while there are jungle worlds moderately farther out and finally some ice worlds in the distance past the 12AU mark.</p>
    <a name="temperatureatmosphere"></a>
    <hr>
    <center><h2>Temperature and Atmosphere</h2></center>
    <p>Atmosphere and temperature are linked, with too high of a temperature (>450K) causing the atmosphere become the VeryHot atmosphere type and light the player on fire as well as cause slowness unless the player is wearing a space suit. Thus, atmosphere and temperature provide hazards for the player to overcome to access that planet\'s resources. Advanced Rocketry currently has five types of non-air atmospheres, Vacuum, which is any atmosphere <25, Low-Oxygen, which is 25-75, HighPressure, which is 125-800, Super High Pressure, which is 800-1600, and the aforementioned Very Hot atmosphere type that comes with high temperatures. Each atmosphere has its place, and different hazards, as well as different suit requirements. Vacuum, High Pressure, Super High Pressure, and Very Hot all require a full space suit, while LowOxygen only requires a mask and some O2 storage, so normally a chestplate as well. If the atmosphere is >125, geodes will spawn if they are enabled, and if the atmosphere is <25 craters will spawn if they are enabled. Controlling the atmosphere controlls both these features and the (though small) challenge players have to face to go around atmospheric effects.</p>
    <a name="uniqueresources"></a>
    <hr>
    <center><h2>Unique Resources</h2></center>
    <img align="left" src="../img/ferric_sand_processing.jpg" />
    <p>A reason players might come to a planet, other than the coolness factor, unique resources or easier ways to get mundane resources in bulk quantities are what should be at the heart of at least some planets. Ores that only generate on specific planets, mobs that only spawn on specific planets, or similar features allow the player to get something out of exploring their local region. For advanced, challenging, packs, this could mean gating specific rare ores behind braving a lava planet, or having a specific structure the player needs to enter to progress only spawn on a remote, super high pressure planet. For a more kitchen-sink pack, this could be something as simple as being able to extract iron from the plentiful oxidized ferric sand of a neighboring planet, or being able to pump Cryotheum from a cold planet, or get packed ice in large quantities there. However, not every planet needs to or should have these, as having to explore the entire galaxy does not make a happy player, so a generally good idea is to put resources in multiple places and leave some simply pretty planets scattered throughout the systems. Conversely, a galaxy without these does not have much of a reason for players to visit, so finding a balance is crucial.</p>
    <a name="gasgiants"></a>
    <hr>
    <center><h2>Gas Giants</h2></center>
    <p>Gas Giants present a very interesting opportunity, as they can provide any Forge fluid to passing travelers. This allows them to be portable refueling stops depending upon the configuration of fuels, as gas giants IRL can provide the materials for both Hydrogen Peroxide (Advanced Rocketry\'s default fuel), Hydrazine (Not UDMH), and the LH2 and LOX combination used in some rocket engines. Similarly, they can provide plentiful resources for other projects if one so desires, such as a very hot gas giant providing pyrotheum or a medium one providing aerotheum for other industry. Gas giants allow for manufacturing on the fly and are incredibly useful, so with proper configuration, it\'s generally reccomended to include at least a few in your systems for on-the-go rocket refuels.</p>';
    
    $infoBarContent = '<h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#biomes">Biomes</a></li>
    <li><a href="#temperatureandatmosphere">Temperature and Atmosphere</a></li>
    <li><a href="#uniqueresources">Unique Resources</a></li>
    <li><a href="#gasgiants">Gas Giants</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex.php');
?> 
