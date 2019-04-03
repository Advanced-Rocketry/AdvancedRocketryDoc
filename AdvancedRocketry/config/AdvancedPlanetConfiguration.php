<?php
    $title = 'Advanced Rocketry Planet Configuration';
    
    $mainContent = '<h1>Advanced Rocketry Planet Configuration</h1><hr><br>

<div style="display: inline-block">
<p>Welcome to the Advanced Rocketry(AR) advanced configuration readme!</p>
<p>To use manual xml planet configuration, download and modify <a href="https://github.com/zmaster587/AdvancedRocketry/blob/master/Template.xml">this template</a> and rename it to "planetDefs.xml" in the config/advancedRocketry folder.</p>
<p>This document will guide you through manually or semi-manually defining planets for your world using the planetDefs.xml file.  This file can be located in either the "config/advRocketry" folder or in the "[path to world]/advRocketry" folder.</p>
<p>Advanced Rocketry will prioritize loading the version in the world folder to allow for each world to have its own configuration.  If the world is being created for the first time then the file in "config/advRocketry/planetDefs.xml" is copied to "[path to world]/advRocketry/planetDefs.xml" automatically.</p>

<p><b>IMPORTANT:</b> As of Advanced Rocketry 1.1.3 the overworld is no longer added to the solar system automatically.  Instead the overworld must now be <a href="#dimMapping">dimmapped</a> to a star.  This was done to allow for more flexibilty (ability to rename overworld, not require luna, etc).</p></div>
<p><b>IMPORTANT:</b>As of Advanced Rocketry 0.2.0, the [path to world]/advRocketry/planetDefs.xml file reflects current state of the galaxy.  It is possible to modify this config and reload the server and see changes relfected in the world without using the resetFromXML config setting.</p>
<p> <br /><h3>Explaination of usable tags:</h3></p>
<hr style="border-width: 5px;"><br />
<a name="basicSpec" ></a>
<center><h3>Basic Specification</h3></center>
<p>The "galaxy" tag should be at the root of the document, this tells AR you are defining your set of planets in the body of this
tag.</p>

<p>Example usage; generates one random planet around a star named Sol with the temperature of the sun at origin:</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;</div></code></div>

<br /><hr>

<a name="starSpec" ></a>
<center><h3>Binary Star Specification</h3></center>
<p>In addition to having single star systems, Advanced rocketry allows Binary, Trinary, and even n-body star systems (As many stars as you want!).  It is much like defining a <a href="#basicSpec">normal star</a> except there\'s a slightly different set of tags.  Namely the \'x\', \'y\', \'numPlanets\', and \'numGasGiants\' tags are absent.  Additionally, there is a new \'separation\' tag.  The \'speration\' tag determines how far from the host star the sister star is located in solar radii.</p>
<p>Unlike the top level star tag, when defining a binary or trinary system, the star tag must go inside the top level star tag immediately before the planet tags.  The name tag is currently unused.  Additionally, sister stars CAN be black holes.</p>

<p>Example usage; generates a trinary star system with the planet Jole:</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1" numGasGiants="0" blackHole="false"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol-2" temp="200" separation="10.0" /&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Jole"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>

<a name="planetSpec"></a>
<center><h3>Planet Specification</h3></center>

<p>The "planet" tag surrounds the definition of a planet.  If a planet tag is used in the body of another planet tag, the inner
planet tag defines a moon of the outer planet.  The planet tag can have the attribute "name".  The name attribute specifies the
name of the planet.  If the name attribute is not present then the planet is automatically named "Sol-planet_id".</p>  

<p>The "numPlanet" attribute defines how many random (extra planets that are randomly generated in addition to planets specified with the planet tag) rocky planets should be defined in the solar systems, if not specified then
AR will default to six.  The "numGasGiants" attribute defines how many gas giants are created in the solar system.</p>

<p>The "blackHole" attribute determines whether or not a star is a black hole or not.  Space stations can orbit black holes and use the Black Hole Generator to create power from items being thrown into the black hole</p>

<p>Example usage; generates one random planet and one planet with manually specified properties named "Earth" with a moon
named "Luna" and another manually specified planet "Mars"</p>

<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1" numGasGiants="0" blackHole="false"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Luna"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Mars"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>

<a name="isKnown"></a>
<center><h3>Is Known</h3></center>

<p>The "isKnown" tag determines whether or not a planet is visible to the player without being researched in the warp controller.  
If the tag is not present the default is false.  This tag as no effect on moons, if the parent planet is visible the moons are also visible.</p>  

<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1" numGasGiants="0"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Luna"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Mars"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;isKnown&#62;True&#60;/isKnown&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />

</div></code></div>

<br /><hr>
<a name="rings"></a>
<center><h3>Rings (1.1.0+)</h3></center>

<p>The "hasRings" tag specifes whether a planet has rings.  By default a planet will not have a ring system.</p>
<p>Example usage; Gives Mars rings</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Mars"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;hasRings&#62true&#60;/hasRings&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>
<br /><hr>
<a name="gasGiant"></a>
<center><h3>Gas Giant (1.0.8+)</h3></center>

<p>The "GasGiant" tag specifes whether a planet is a Gas Giant.  Gas Giants cannot be landed on but can be used as sources of gasses</p>
<p>Example usage; creates a planet named "Jupiter" and makes it a gas giant</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Jupiter"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;GasGiant&#62true&#60;/GasGiant&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>
<br /><hr>

<a name="gas"></a>
<center><h3>Gas tag (1.2.0+)</h3></center>

<p>The "gas" tag specifes a gas that is allowed to be mined from the planet.  
This tag is only effective on <a href="#gasGiant">Gas Giant</a> planets.  Multiple copies of this tag per planet are allowed.
The text inside the tag consists of a fluid name from Advanced Rocketry or another mod.</p>
<p>Example usage; creates a planet named "Jupiter" and makes it a gas giant containing only oxygen and nitrogen</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Jupiter"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;GasGiant&#62true&#60;/GasGiant&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;gas&#62nitrogen&#60;/gas&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;gas&#62oxygen&#60;/gas&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>
<br /><hr>

<a name="fogColor"></a>
<center><h3>Fog Color</h3></center>

<p>The "fogColor" tag specifes the color of the fog on a planet.  The body takes three comma seperated values corresponding to
Red, Green, and Blue respectivly.  These values can be any decimal number between 0 and 1 inclusive.  A 24-bit (6-byte) 
Hex color can also be specified by prepending the code with "0x".</p>
<p>Example usage; specifes a teal color fog using the RGB format.</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;fogColor&#62;0.5,1,1&#60;/fogColor&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<p>Example usage; specifes the same teal color fog as the previous example using hex format.</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;fogColor&#62;0x7FFFFFF&#60;/fogColor&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="skyColor"></a>
<center><h3>Sky Color</h3></center>

<p>The "skyColor" tag specifes the color of the sky on a planet.  The body takes three comma seperated values corresponding to
Red, Green, and Blue respectivly.  These values can be any decimal number between 0 and 1 inclusive.  A 24-bit (6-byte) 
Hex color can also be specified by prepending the code with "0x".</p>

<p>Example usage; specifes a teal color sky using the RGB format.</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;skyColor&#62;0.5,1,1&#60;/skyColor&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
</div></code></div>

<p>Example usage; specifes the same teal color sky as the previous example using hex format.</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;skyColor&#62;0x7FFFFFF&#60;/skyColor&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="atmDensity"></a>
<center><h3>Atmosphere Density</h3></center>
<p>The "atmosphereDensity" tag specifes the density of the atmosphere on a planet.  Any value greater than 75 is breathable, 
100 is Earthlike, anything higher than 100 has a denser atmosphere than Earth and will have thicker fog.  Any value less than 75
is unbreathable and will require a spacesuit and will generate craters.</p>

<p>Atmosphere density also has an impact on the temerature of the planets, planets with thinner will be colder 
and planets with thicker atmospheres will be warmer.</p>

<p>Max: 200<br />
Default: 100<br />
Min: 0</p>

<p>Example usage; specifes an atmosphere with the same density as Earth</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;atmosphereDensity&#62;100&#60;/atmosphereDensity&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="gravMult"></a>
<center><h3>Gravitational Multiplier</h3></center>
<p>The "gravitationalMultiplier" tag specifes the density of the gravitational pull on a planet.  100 is earthlike.  Any value less than 100
will result in a gravitational pull less than that of Earth.  Any value higher than 110 may result in players being UNABLE to jump
up blocks without assistance from stairs.  Values very close to 0 ( &#60; 10) may result in players being unable to fall.
YOU HAVE BEEN WARNED.</p>

<ul>
<li>Max: 200</li>
<li>Default: 100</li>
<li>Min: 0</li>
<li>Recommended Max: 110</li>
<li>Recommended Min: 10</li>
</ul>

<p>Example usage; specifes an atmosphere with the same density as Earth</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;gravitationalMultiplier&#62;100&#60;/gravitationalMultiplier&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="orbitalDist"></a>
<center><h3>Orbital Distance</h3></center>
<p>The "orbitalDistance" tag specifes the distance of the planet from the body it is orbiting.
For planets orbiting the SUN:<br />
    <div>100 is defined as an earthlike and will result in the sun appearing normal in size.  200 is very far from the sun and will result
    in the sun appearing very small.  0 is nearly touching the surface of the host star and will result in the host star taking up a
    majority of the sky.
    Orbital distance also has an impact on the temerature of the planets, planets far away will be colder and planets closer to the host
    star will be warmer.</div><br />
For MOONS orbiting other planets: <br />
    <div>The effects are the same as for planets orbiting a star except the observed host star size is determined by the planet orbiting the sun.
    I.E. the apparent size of the sun as seen from the moon is determined by the distance between the Earth and the sun.  The apparent
    distance of the host planet, however, will be changed by this value.  The apparent size of the moon as viewed from the host planet is
    also the direct result of this value.</div></p>

<p>For planets orbiting the sun, lower values result in higher temperatures.
For moons, this value has no effect on temperatures.</p>

<ul>
<li>Max: 200</li>
<li>Default: 100</li>
<li>Min: 0</li>
</ul>

<p>Example usage; specifes a distance from the host star to be the same as Earth</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;orbitalDistance&#62;100&#60;/orbitalDistance&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="orbitalTheta"></a>
<center><h3>Orbital Theta</h3></center>
<p>The "orbitalTheta" tag specifes the starting angular displacement relative to the origin in degrees.</p>

<ul>
<li>Max: 360  </li>
<li>Default: 0</li>
<li>Min: 0    </li>
</ul>

<p>Example usage; specifes a planet to start exactly opposite the sun from Earth</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;orbitalTheta&#62;180&#60;/orbitalTheta&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="orbitalPhi"></a>
<center><h3>Orbital Phi</h3></center>
<p>The "orbitalPhi" tag specifes the angle of the plane on which the planet rotates around the star or it\'s host planet, 90 will cause the planet or sun to rise and set in the north and south (the planet would orbit such that it would pass over both poles) whereas 0 would cause the sun to rise in the east and set in the west</p>

<ul>
<li>Max: 360  </li>
<li>Default: 0</li>
<li>Min: 0    </li>
</ul>

<p>Example usage; sun rises in the north and sets in the south</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;orbitalPhi&#62;90&#60;/orbitalPhi&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="oregen"></a>
<center><h3>OreGen</h3></center>
<p>The "oreGen" tag allows configuration of ore spawn on a planet-by-planet basis.  Exact specifics on how to use the tag are documented in more detail <a href="./OreConfiguration.php">here</a>.</p>

<p>Note: unless the dimid of the planet is explicitly specifed with the <a href="#dimId"> dimid tag</a>, adding or removing planets to an already existing world in the AR config could result in unpredictable behavior</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Pootis"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;OreGen&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/OreGen&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="rotationalPeriod"></a>
<center><h3>Rotational Period</h3></center>

<p>The "rotationalPeriod" tag specifes length of a day night cycle for the planet in ticks.  Where 20 ticks = 1 second.  24,000/20 = 
1,200 seconds = 20 minutes.  I strongly recommend not using values &#60; 400 as I found them to be very disorienting and somewhat
motion sickness inducing.</p>

<ul>
<li>Max: 2^31 - 1 = 2,147,483,647 (java has no unsigned int...)</li>
<li>Default: 24000</li>
<li>Min: 1</li>
</ul>

<p>Example usage; specifes a planet named Beebop to have a 10 minute day/night cycle</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Beebop"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;rotationalPeriod&#62;12000&#60;/rotationalPeriod&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="fillerBlock"></a>
<center><h3>Filler Block</h3></center>

<p>The "fillerBlock" tag specifes the block to be used to fill most of the world.  As a note, this may be better used in conjuntion with the OreGen config as many ores may only spawn in stone.</p>

<p>Example usage; Creates a netherrack world</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;fillerBlock&#62;minecraft:netherrack&#60;/fillerBlock&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
</div></code></div>

<br /><hr>
<a name="oceanBlock"></a>
<center><h3>Ocean Block</h3></center>
<p>The "oceanBlock" tag specifes the block that should fill oceans.  It is \'Minecraft:water\' by default.  It can be any block in the game, however damage values are not accepted at this point in time.</p>
<p>It is also ill advisable to use a block with a tile entity (like a furnace or chest) as an ocean block unless you have a really powerful computer.</p>

<p>Example usage; Lava oceans</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Vulcan"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;oceanBlock&#62;Minecraft:lava&#60;/oceanBlock&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="seaLevel"></a>
<center><h3>Sea Level</h3></center>

<p>The "seaLevel" tag specifes the height at which ocean generates on a world, only works on worlds generated by AR.</p>

<ul>
<li>Max: 255</li>
<li>Default: 64</li>
<li>Min: 1</li>
</ul>

<p>Example usage; specifes a planet named WaterWorld and gives it a sealevel of 128</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="WaterWorld"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;seaLevel&#62;128&#60;/seaLevel&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="spawnable"></a>
<center><h3>Spawnable</h3></center>

<p>The "spawnable" tag tells Advanced Rocketry to attempt to spawn a provided entity on a given planet.  You can have more than one tag per planet.  The tag has an entity name as the inner data plus three attributes:</p>

<ul>
<li>weight: how likely it is to spawn compared to the others (default 100)</li>
<li>groupMin: minimum number of entities to spawn in a cluster (default 1)</li>
<li>groupMax: maximum number of entities to spawn in a cluster (default 1)</li>
</ul>

<p>Example usage; specifes a planet named Squidville and spawns villagers and sheep in the wild where each group contains between 1 and 5 members.</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Squidville"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;spawnable weight="1" groupMin="1" groupMax="5"&#62;minecraft:villager&#60;/spawnable&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;spawnable weight="1" groupMin="1" groupMax="5"&#62;minecraft:sheep&#60;/spawnable&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="biomeIds"></a>
<center><h3>Biome Ids</h3></center>

<p>The "biomeIds" tag specifes a comma seperated list of biome ids to generate on the planet.  This list can include both vanilla
and modded biome ids.  If this tag is not included then the planet will automatically generate a list of biomes from its
atmosphere density, gravitationalMultiplier, and distance from the sun.</p>

A list of vanilla biomes can be found <a href=http://minecraft.gamepedia.com/Biome>here</a>

<p>Example usage; Planet will generate only ocean and ice plains</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;biomeIds&#62;0,12&#60;/biomeIds&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>
<a name="dimId"></a>
<center><h3>Dim ID</h3></center>

<p>The "DIMID" attribute allows a user to specify the exact dimension id that the planet is going to occupy, useful for custom ore gen mods
and more control in general</p>

<p>Example usage; Planet will generate with the dimid 99</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth" DIMID="99"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>

<a name="dimMapping"></a>
<center><h3>Dim Mapping</h3></center>
<p>The "dimMapping" attribute allows a user to specify that the following planet is a dimension from another mod.  Note that it 
must be accompanied by a DIMID tag!!!</p>

<p>Be warned, if another mod does not have a dimension with that ID it will cause a crash if somebody tries to go there!</p>

<p>Example usage; Adding Twilight forests (with default configs) as a planet around Sol</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Earth" DIMID="7" dimMapping=""&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>

<a name="customIcon"></a>
<center><h3>Custom Icon (1.0.16+/1.1.5+)</h3></center>
<p>The "customIcon" attribute allows a user to specify the icon used for a planet.  Currently only planet icons that come with Advanced Rocketry can be used</p>

<table class="table table-bordered">
    <thead> 
         <th>Name</th> 
         <th>Icon</th>
         <th>Name</th>
         <th>Icon</th>
         <th>Name</th>
         <th>Icon</th>
    </thead>
    <tr>
        <td>EarthLike</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/Earthlike.png?raw=true"></td>
        <td>GasGiantRed</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/GasGiantOrange.png?raw=true"></td>
        <td>IceWorld</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/IceWorld.png?raw=true"></td>
    </tr>
    <tr>
        <td>GasGiantBlue</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/GasGiantBlue.png?raw=true"></td>
        <td>MarsLike</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/marslike.png?raw=true"></td>
        <td>Moon</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/moon.png?raw=true"></td>
    </tr>
    <!-- <tr>
        <td>Lava</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/Lava.png?raw=true"></td>
    </tr> -->
    <!-- <tr>
        <td>WaterWorld</td>
        <td><img height="64" width="64" src="https://github.com/zmaster587/AdvancedRocketry/blob/MC1.7/src/main/resources/assets/advancedrocketry/textures/planets/WaterWorld.png?raw=true"></td>
    </tr> -->
</table>

<p>Example usage; Makes the overworld have the texture of a red gas giant</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="Overworld" DIMID="0" dimMapping="" customIcon="gasgiantred"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>

<br /><hr>

<a name="artifact"></a>
<center><h3>Artifact (0.1.8+)</h3></center>
<p>The "artifact" attribute allows a user to specify an item requirement for travelling to the planet.  The artifacts must all be in the <a href="">warp controller</a> every time the user wishes to warp to that planet.  Also if the "planetsMustBeDiscovered" is set to true
then in order for the planet to be discovered in the <a href="">warp controller</a> the specifed artifacts must be placed in the machine.</p>
<p>Each item can be specifed by &#60;modname&#62;:&#60;blockname&#62; &#60;meta&#62;</p>

<p>Example usage; Makes a planet by the of "CoalLand" require charcoal (coal with meta 1) in the warp controller to warp to in a warpship</p>
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD; overflow: auto">
<code>
<div style="width:100%">
&#60;galaxy&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;planet name="CoalLand"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;artifact&#62;minecraft:coal 1&#60;/artifact&#62;</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/planet&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...</br>
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/star&#62;<br />
&#60;/galaxy&#62;<br />
</div></code></div>
';
    
    $infoBarContent = ' <h3>Table of Contents:</h3>
    <ol style="padding-left:15px;">
    <li><a href="#basicSpec">Basic Specification</a></li>
    <li><a href="#starSpec">Binary Star Specification</a></li>
    <li><a href="#planetSpec">Planet Specification</a></li>
    <li><a href="#isKnown">isKnown</a></li>
    <li><a href="#rings">Rings</a></li>
    <li><a href="#gasGiant">Gas Giant</a></li>
    <li><a href="#gas">Gas</a></li>
    <li><a href="#fogColor">Fog Color</a></li>
    <li><a href="#skyColor">Sky Color</a></li>
    <li><a href="#atmDensity">Atmosphere Density</a></li>
    <li><a href="#gravMult">Gravitational Multiplier</a></li>
    <li><a href="#orbitalDist">Orbital Distance</a></li>
    <li><a href="#orbitalTheta">Orbital Theta</a></li>
    <li><a href="#orbitalPhi">Orbital Phi</a></li>
    <li><a href="#oregen">OreGen</a></li>
    <li><a href="#rotationalPeriod">Rotational Period</a></li>
    <li><a href="#fillerBlock">Filler Block</a>
    <li><a href="#oceanBlock">Ocean Block</a></li>
    <li><a href="#seaLevel">Sea Level</a></li>
    <li><a href="#spawnable">Spawnable</a></li>
    <li><a href="#biomeIds">Biome Ids</a></li>
    <li><a href="#dimId">Dim ID</a></li>
    <li><a href="#dimMapping">Dim mapping</a></li>
    <li><a href="#customIcon">Custom Icon</a></li>
    <li><a href="#artifact">Artifact</a></li>
    </ol>';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex.php');
?>
