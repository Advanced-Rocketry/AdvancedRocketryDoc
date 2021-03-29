<?php
    $title = 'Asteroid Configuration Advanced';
    
    $mainContent = '<h2>'.$title.'</h2><hr><center><h2>Overview</h2></center><p>Asteroids, while a simple system initially, can become an interesting way of exploring the system the player is in. Generally, asteroids can be sorted into two types, with one of which being asteroids that are actually asteroids and are composed of ice, rock, and ore; the other are pieces of space junk. Space junk is an interesting concept to have within a pack, and a way if so desired for the packmaker to give players alien technology they cannot craft. Space junk asteroids are not generated or findable by default in Advanced Rocketry.</p>
    <br><br>
    <a name="asteroids"></a>
    <hr>
    <center><h2>Rocky and Icy Bodies</h2></center>
    <p>These are by far the most common type of asteroid you\'ll see in modpacks, they contain some combination of ores, rock, and ice. They are the only type present in Advanced Rocketry by default, and they are a decent source of ores whenever they are in the tech tree. As simple as they are, there are some consideration to take to heart: if this type of asteroid is sufficiently late in your techtree you may need to make them much larger and/or more ore-bearing than the default Advanced Rocketry asteroids to offset the fact that players may already have some form of automated mining set up. They\'re a good place to include rare ores, and if you make them a requirement for your pack, it can force players to automate and create parallel satellite operations.</p>
    <a name="derelicts"></a>
    <hr>
    <center><h2>Space Junk</h2></center>
    <p>These are an interesting type of asteroid, they consist of technological pieces and other processed resources you\'d be likely to find on either abandoned stations, defunct satellites, or spent fuel tanks and rocket stages. They\'re likely less common or relegated to specific distances that normal asteroids aren\'t. This can be done because all asteroid weights are relative, and as such if something like the asteroid below is the only asteroid at distance 35, you\'ll only have rocket stages and not any other asteroids.</p>
    <div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
    <code>
    <div style="width:100%">
    &#60;Asteroids&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&#60;asteroid name="Jettisoned Rocket Stage" distance="30" mass="50" massVariability="0.2" probability="0.005" richness="1.0" richnessVariability="0.0" timeMultiplier="8"&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="libVulpes:libVulpesproductsheet 7" chance="30"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="libVulpes:libVulpesproductplate 7" chance="5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="libVulpes:libVulpesproductrod 7" chance="5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="libVulpes:libVulpesproductsheet 9" chance="45"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="advancedRocketry:tile.pipeSeal" chance="5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="Eln:Eln.SixNode 2068" chance="5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="RotaryCraft:rotarycraft_item_enginecraft 17" chance="2.5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;ore itemStack="RotaryCraft:rotarycraft_item_enginecraft 19" chance="2.5"/&#62;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&#60;/asteroid&#62;<br />
    &#60;/Asteroids&#62;<br />
    </div></code></div>';
    
    $infoBarContent = '<h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#asteroids">Rocky And Icy Bodies</a></li>
    <li><a href="#derelicts">Space Junk</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?> 
