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
<h3>1.1.2</h3>
<ul>
<li>New asteroid selection mechanic, asteroid chips now programming in observetory</li>
<li>More motors have been added</li>
<li>More advanced motors increase multiblock machine speed</li>
<li>Observatory now requires a motor</li>
<li>Observatory can have glass exchanged for lens which increase view distance</li>
<li>Space suits can now be dyed</li>
<li>Blast furnace/crystallizer/electrolyser/rolling machine speed can be increased with higher teir coils</li>
<li>rocket input and output hatches now have states for redstone IO and can now have operation suspended with redstone signals</li>
<li>Fix rocket loaders and unloader having swapped textures</li>
<li>[ libvulpes ] Motors moved to libvulpes</li>
<li>[ libvulpes ] More coils</li>
</ul>';
    
    $infoBarContent = '';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
