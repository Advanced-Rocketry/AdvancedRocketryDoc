<p>Welcome to the Advanced Rocketry(AR) advanced configuration readme!</p>

<p>This document will guide you through manually or semi-manually defining planets for your world!</p>

<p>To use manual xml planet configuration, download and modify https://github.com/zmaster587/AdvancedRocketry/blob/master/Template.xml and rename to "planetDefs.xml" in the config/advancedRocketry folder</p>


<p> <br />Explaination of usable tags:</p>
<hr>

<p>The "planets" tag should be at the root of the document, this tells AR you are defining your set of planets in the body of this
tag.  The "numPlanet" attribute defines how many random planets should be defined in the solar systems, if not specified then
AR will default to six.</p>

<p>Example usage; generates one random planet around a star named Sol with the temperature of the sun at origin:</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    ...
&#60;/star&#62;
&#60;/galaxy&#62;</code>

<hr>

<p>The "planet" tag surrounds the definition of a planet.  If a planet tag is used in the body of another planet tag, the inner
planet tag defines a moon of the outer planet.  The planet tag can have the attribute "name".  The name attribute specifies the
name of the planet.  If the name attribute is not present then the planet is automatically named "Sol-planet_id".</p>

<p>Example usage; generates one random planet and one planet with manually specified properties named "Earth" with a moon
named "Luna" and another manually specified planet "Mars"</p>

<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        ...
        &#60;planet name="Luna"&#62;
        ...
        &#60;/planet&#62;
    &#60;/planet&#62;
    &#60;planet name="Mars"&#62;
    ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>
<hr>

<p>The "fogColor" tag specifes the color of the fog on a planet.  The body takes three comma seperated values corresponding to
Red, Green, and Blue respectivly.  These values can be any decimal number between 0 and 1 inclusive.  A 24-bit (6-byte) 
Hex color can also be specified by prepending the code with "0x".</p>

<code>
Example usage; specifes a teal color fog using the RGB format.
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;fogColor&#62;0.5,1,1&#60;/fogColor&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<p>Example usage; specifes the same teal color fog as the previous example using hex format.</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;fogColor&#62;0x7FFFFFF&#60;/fogColor&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "fogColor" tag specifes the color of the sky on a planet.  The body takes three comma seperated values corresponding to
Red, Green, and Blue respectivly.  These values can be any decimal number between 0 and 1 inclusive.  A 24-bit (6-byte) 
Hex color can also be specified by prepending the code with "0x".</p>

<p>Example usage; specifes a teal color sky using the RGB format.</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;skyColor&#62;0.5,1,1&#60;/skyColor&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
</code>

<p>Example usage; specifes the same teal color sky as the previous example using hex format.</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;fogColor&#62;0x7FFFFFF&#60;/fogColor&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "atmosphereDensity" tag specifes the density of the atmosphere on a planet.  Any value greater than 75 is breathable, 
100 is Earthlike, anything higher than 100 has a denser atmosphere than Earth and will have thicker fog.  Any value less than 75
is unbreathable and will require a spacesuit and will generate craters.</p>

<p>Atmosphere density also has an impact on the temerature of the planets, planets with thinner will be colder 
and planets with thicker atmospheres will be warmer.</p>

<p>Max: 200<br />
Default: 100<br />
Min: 0</p>

<p>Example usage; specifes an atmosphere with the same density as Earth</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;atmosphereDensity&#62;100&#60;/atmosphereDensity&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "gravitationalMultiplier" tag specifes the density of the atmosphere on a planet.  100 is earthlike.  Any value less than 100
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
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;gravitationalMultiplier&#62;100&#60;/gravitationalMultiplier&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
<code>

<hr>

<p>The "orbitalDistance" tag specifes the distance of the planet from the body it is orbiting.
For planets orbiting the SUN:<br />
    <div>100 is defined as an earthlike and will result in the sun appearing normal in size.  200 is very far from the sun and will result
    in the sun appearing very small.  0 is nearly touching the surface of the host star and will result in the host star taking up a
    majority of the sky.
    Orbital distance also has an impact on the temerature of the planets, planets far away will be colder and planets closer to the host
    star will be warmer.<.div><br />
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
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;orbitalDistance&#62;100&#60;/orbitalDistance&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "orbitalTheta" tag specifes the starting angular displacement relative to the origin in degrees.</p>

<ul>
<li>Max: 360  </li>
<li>Default: 0</li>
<li>Min: 0    </li>
</ul>

<p>Example usage; specifes a planet to start exactly opposite the sun from Earth</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;orbitalTheta&#62;180&#60;/orbitalTheta&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "orbitalTheta" tag specifes the angle of the plane on which the planet rotates around the star or it's host planet, 90 will cause the planet or sun to rise and set in the north and south (the planet would orbit such that it would pass over both poles) whereas 0 with be the normal procession (like orbit over the equator)</p>

<ul>
<li>Max: 360  </li>
<li>Default: 0</li>
<li>Min: 0    </li>
</ul>

<p>Example usage; specifes a planet to start exactly opposite the sun from Earth</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;orbitalPhi&#62;180&#60;/orbitalPhi&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "rotationalPeriod" tag specifes length of a day night cycle for the planet in ticks.  Where 20 ticks = 1 second.  24,000/20 = 
1,200 seconds = 20 minutes.  I strongly recommend not using values &#60; 400 as I found them to be very disorienting and somewhat
motion sickness inducing.</p>

<ul>
<li>Max: 2^31 - 1 = 2,147,483,647 (java has no unsigned int...)</li>
<li>Default: 24000</li>
<li>Min: 1</li>
</ul>

<p>Example usage; specifes a planet to start exactly opposite the sun from Earth</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;orbitalTheta&#62;180&#60;/orbitalTheta&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "biomeIds" tag specifes a comma seperated list of biome ids to generate on the planet.  This list can include both vanilla
and modded biome ids.  If this tag is not included then the planet will automatically generate a list of biomes from its
atmosphere density, gravitationalMultiplier, and distance from the sun.</p>

A list of vanilla biomes can be found <a href=http://minecraft.gamepedia.com/Biome>here</a>

<p>Example usage; Planet will generate only ocean and ice plains</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth"&#62;
        &#60;biomeIds&#62;0,12&#60;/biomeIds&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "DIMID" attribute allows a user to specify the exact dimension id that the planet is going to occupy, useful for custom ore gen mods
and more control in general</p>

<p>Example usage; Planet will generate with the dimid 99</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth" DIMID="99"&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>

<hr>

<p>The "dimMapping" attribute allows a user to specify that the following planet is a dimension from another mod.  Note that it 
must be accompanied by a DIMID tag!!!</p>

<p>Be warned, if another mod does not have a dimension with that ID it will cause a crash if somebody tries to go there!</p>

<p>Example usage; Adding Twilight forests (with default configs) as a planet around Sol</p>
<code>
&#60;galaxy&#62;
&#60;star name="Sol" temp="100" x="0" y="0" numPlanets="1"&#62;
    &#60;planet name="Earth" DIMID="7" dimMapping=""&#62;
        ...
    &#60;/planet&#62;
&#60;/star&#62;
&#60;/galaxy&#62;
</code>