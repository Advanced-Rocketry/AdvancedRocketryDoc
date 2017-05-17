<?php
    $title = 'Asteroid Configuration';
    
    $mainContent = '<h2>Advanced Rocketry Asteroid Configuration (1.1.6+)</h2>
    <p>Welcome to the Advanced Rocketry asteroid Configuration readme!  This document will list and explain the meanings of the different settings availible.</p>
    <p>The asteroid config is located in the "./config/advRocketry/asteroidConfig.xml" file.  This config is used to specify the traits of asteroids that can be found in the <a href="../blocks/Observatory.php">observatory</a> ingame.</p>
    <p>The configuration must be surrounded with "Asteroids" tags</p>
    <p><h3>Explanation of usable tags:</h3></p>
    <hr style="border-width: 5px;">
    <a name="asteroidSpec"></a>
    <center><h3>Asteroid Specification</h3></center>
    <p>The "asteroid" tag is used to begin and end the Specification of a new type of asteroid.  The tag has several fields:
    <ul>
    <li><b>name</b> - The name of the asteroid type.</li>
    <li><b>distance</b> - The minimum viewable distance the observatory must have to be able to discover this asteroid type.</li>
    <li><b>mass</b> - The total amount of blocks that can be harvested from this asteroid.</li>
    <li><b>massVariability</b> - The range of uncertainty of the number of blocks in an asteroid. (number = mass +/- massVariability).</li>
    <li><b>minLevel</b> - unused, to be removed.</li>
    <li><b>richness</b> - The ratio of the ore to rock content of the asteroid, 1.0 would make the asteroid 100% ore.</li>
    <li><b>richnessVariability</b> - The range of uncertainty of the ratio of ore to stone.</li>
    <li><b>probability</b> - The probability relative to other asteroids of showing up in the list during gameplay.  Note that the probabilities are normallized so sums of probabilities greater than 1 are allowed.</li>
    </ul></p>
    <p>
    The only tags allowed inside the asteroid specification are "ore" tags.  The ore tags contain an "itemstack" and "chance" field.  The "itemstack" field should contain the unlocaillized name of a block or item optionally followed by a space and meta value.  The "chance" field should contain an integer and its purpose is to specify the chances of that particular stack being mined compared to other stacks in the asteroid.  Most asteroids should contain a healthy mix of all the stacks specified.
    </p>
    <p>Example asteroid:  contains iron, gold, redstone ores, and charcoal (coal with metavalue 1)</p>
    
    <div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
    <code><div style="width:1600px">
    &#60;Asteroids&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&#60;asteroid name="Large Asteroid" distance="10" mass="1000" massVariability="0.5" minLevel="0" probability="1" richness="0.8" richnessVariability="0.5"&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="minecraft:iron_ore" chance="15" /&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="minecraft:gold_ore" chance="10" /&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="minecraft:redstone_ore" chance="10" /&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="minecraft:coal 1" chance="20" /&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&#60;/asteroid&#62;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
    &#60;/Asteroids&#62;<br>
    </div></code></div>';
    
    $infoBarContent = 'Asteroid Configuration';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>