<?php
    $title = 'Advanced Rocketry Ore Configuration';
    
    $mainContent = '<h2>Advanced Rocketry Ore Configuration</h2><hr>
<br />
<p>Welcome to the Advanced Rocketry(AR) advanced ore configuration readme!<br />
This document will guide you through manually configuring ore for spawning on AR\'s various planets.</p>
<p>Default ore configurations are loaded from "./config/advRocketry/oreConfig.xml".  This file can be used to specify which ores are generated on different planet types.  If a type of planet is not specified, then it will use standard overworld generation.  There are two factors that determine the planet type: Atmosphere Pressure and Temperature.  A list of each can be found below:  </p>
<p>
<h3>Temperature Ranges:</h3>
<ol start="0">
<li><b>Very Hot</b>: usually spawns mars or venus like planets</li>
<li><b>Hot</b>: Tends to spawn more desert and jungle biomes</li>
<li><b>Normal</b>: Just like the overworld, but with a limited set of random biomes</li>
<li><b>Cold</b>: Spawns more of the colder biomes</li>
<li><b>Frigid</b>: Spawns only cold biomes</li>
<li><b>Snowball</b>: Also only spawns cold biomes</li>
</ol>
</p>
<p>
<h3>Pressure Ranges:</h3>
<ol start="0">
<li><b>High Pressure</b>: usually spawns mars or venus like planets or swampy planets, has a small chance of spawning biomes with heavy storms.</li>
<li><b>Normal</b>: Similar to the overworld</li>
<li><b>Low</b>: Stars are visible even during the day, barely has enough atmosphere to support life</li>
<li><b>None</b>: Dead worlds, the moon for example.</li>
</ol>
</p>
<br />
<i>Note: this table may be moved to a planets concept page in the future</i>

<br />
<p><h3>Explanation of usable tags:</h3></p>
<hr style="border-width: 5px;">
<p>
<h3>OreGen tag</h3>
The "OreGen" defines a new type of planet to define the ore generation for.  The "OreGen" tag contains "pressure" and "temp" attributes.  These attributes specify the type of planet for which to define ore gen.  Both attributes use integers corresponding to the temperature and pressure tables above and at least one of the tags must be present.</p>
<p>Defining only one of the tags will use the same configuration for all of the undefined tag\'s values.  For example if I do not define the "temp" tag and define pressure to be 3, then I am defining ore generation for all planets with no atmosphere regardless of the surface temperature.</p>
<p>Planet type definitions are also read into the game in order, so if I define one type of oregen for all low pressure planets then farther down the file i define oregen for low pressure and high temperature planets, then low pressure high temperature planets will have a different oregen than other low pressure planets, however if I reverse the order then the entry for low pressure high temperature planets will be overwritten.</p>
<p>
<h3>ore tag</h3>
The "ore" tag specifies an entry for a type of ore to spawn.  This tag has the following attributes:
<ul>
<li><b>block</b>: the name or id of the block</li>
<li><b>meta</b>: optional attribute to specify the meta value of the block</li>
<li><b>minHeight</b>: minimum height at which to  spawn the ore (between 1 and maxHeight)</li>
<li><b>maxHeight</b>: maximum height at which to spawn the ore (between minHeight and 255)</li>
<li><b>clumpSize</b>: amount of ores to generate in each clump
<ul>
<li> The vanilla veinSize property</li>
<li>This is not the number of ore blocks in a vein; that is a more complex nonlinear relationship</li>
<li>Vanilla coal has a size of 16, while iron has a size of 8</li>
<li>Please note that sizes over 100 can mean veins the size of villages, yielding 5k+ ore</li>
<Sizes over 48 are not reccomended to be spawned more than a few times pre chunk, as they can become unreasonably large and common</li>
</ul>
</li>

<li><b>chancePerChunk</b>: maximum number of clumps that can be spawned in a given chunk</li>
</ul>
</p>

<p>
</p>
<p><h3>Example</h3> All planets with no atmosphere will spawn large quantities of iron blocks except those with high temperature, which will instead spawn gold blocks<br />
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
--- ./config/advancedRocketry/OreConfiguration.xml ---<br />

&#60;OreConfig&#62;<br />
&nbsp;&#60;oreGen pressure="3"&#62;<br />
&nbsp;&nbsp;&#60;ore block="minecraft:iron_block" minHeight="20" maxHeight="80" clumpSize="32" chancePerChunk="64" /&#62;<br />
&nbsp;&#60;/oreGen&#62;<br />
&nbsp;&#60;oreGen pressure="3" temp="5"&#62;<br />
&nbsp;&nbsp;&#60;ore block="minecraft:gold_block" minHeight="20" maxHeight="80" clumpSize="32" chancePerChunk="64" /&#62;<br />
&nbsp;&#60;/oreGen&#62;<br />
&#60;/OreConfig></div></code></div>';
    
    $infoBarContent = ' Index of Advanced Rocketry Items';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex.php');
?>
