<?php
    $title = 'Advanced Rocketry Recipe Configuration';
    
    $mainContent = '<h2>Advanced Rocketry Recipe Configuration</h2>
<br />
<p>Welcome to the Advanced Rocketry(AR) advanced recipe configuration readme!<br />
This document will guide you through manually adding recipes to AR\'s various machines.<br />Each machine will generate a "MACHINENAME.xml" in the config/advancedRocketry folder with an empty set of "Recipes" tags.</p>


<p><h3>Explaination of usable tags:</h3></p>
<hr style="border-width: 5px;">
<p>The "Recipe" tag surrounds each recipe entry, this tag contains the "timeRequired" and "power" attributes, which determines the amount of time in ticks and the power consumption in RF/t respectivly.</p>

<p>Each recipe node must contain an input and output node.</p>

<p>Each input node and output node must contain at least one of the following:</p>

<ul>
<li>"itemStack" node: \'<itemStack>"namespace:unlocallized_name OR blockid/itemid" size meta</itemStack>\' where size and meta are optional</li>
<li>"oreDict" node: \'<oreDict>"oreDictionaryName" size</oreDict>\' where size (the stack size) is optional</li>
<li>"fluidStack" node: \'<fluidStack>"fluidName" size</fluidStack>\' where size (the number of millibuckets) is optional</li>
</ul>

<p>Example (2 spruce logs and five iron ore makes 1 gold ore)<br />
<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD">
<code>
--- ./config/advancedRocketry/CuttingMachine.xml ---<br />
&#60;Recipes&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;Recipe timeRequired="10" power="50"&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;input&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;itemStack>minecraft:log 2 1&#60;/itemStack&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;oreDict&#62;oreIron 5&#60;/oreDict&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/input&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;output&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;itemStack&#62;minecraft:gold_ore&#60;/itemStack&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;/output&#62;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#60;/Recipe&#62;<br />
&#60;/Recipes&#62;</p></code></div>';
    
    $infoBarContent = 'Advanced Rocketry Recipe configuration';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>