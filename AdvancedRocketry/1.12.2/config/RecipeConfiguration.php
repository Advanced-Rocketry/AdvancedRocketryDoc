<?php
    $title = 'Advanced Rocketry Recipe Configuration';
    
    $mainContent = '<h2>Advanced Rocketry Recipe Configuration</h2><hr>
<br />
<p>Welcome to the Advanced Rocketry advanced recipe configuration readme!<br /></p>

<p>Since Advanced Rocketry 1.5.0, resource packs are the preferred way to configure recipes for Advanced Rocketry.  Advanced Rocketry provides its own recipe types; one for each machine.
Each recipe type has essentially the same tags.  The recipe types are as follows:
</p>
<ul>
<li>rollingmachine</li>
<li>precisionassembler</li>
<li>electricarcfurnace</li>
<li>cuttingmachine</li>
<li>chemicalreactor</li>
<li>electrolyser</li>
<li>crystallizer</li>
</ul>
<br>
<p>Each of these types create a recipe for the corresponding machine.  Due to the complexity of recipes allowed in AdvancedRocketry\'s machines, the tags for the JSON may look a little different.</p> 
<p>Below is a sample JSON that takes one bone and 10mb of nitrogen then converts it to 8 bonemeal and 10mb of water in the chemical reactor:</p>

<div style="border-width: 1px; border-style: dashed; padding: 15px; background-color: #DDD">
<code>
{<br>
&nbsp;&nbsp;&nbsp;&nbsp;"type":&nbsp;"advancedrocketry:chemicalreactor",<br>
&nbsp;&nbsp;&nbsp;&nbsp;"itemingredients":<br>
&nbsp;&nbsp;&nbsp;&nbsp;[<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"item":&nbsp;"minecraft:bone"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;],<br>
&nbsp;&nbsp;&nbsp;&nbsp;"fluidingredients":<br>
&nbsp;&nbsp;&nbsp;&nbsp;[<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fluid":&nbsp;"nitrogen",<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"amount":&nbsp;10<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;],<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"time":&nbsp;100,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"energy":&nbsp;1,<br>
&nbsp;&nbsp;&nbsp;&nbsp;"itemresults":<br>
&nbsp;&nbsp;&nbsp;&nbsp;[<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"item":&nbsp;"minecraft:dye",<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"data":&nbsp;15,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"count":&nbsp;8<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;],<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fluidresults":<br>
&nbsp;&nbsp;&nbsp;&nbsp;[<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fluid":&nbsp;"water",<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"amount":&nbsp;10<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;]<br>
}<br>
</code></div>

<ul>
<li><b>itemingredients:</b> itemstack ingredients that are to be used as the recipe input.  These work just like shapeless recipes except you CAN use the count tag here to specify the minimum accepted stacksize.</li>
<li><b>fluidingredients:</b> Fluids used in the recipe input.  These tags are AR specific.  Like itemingredients, it is an array, however each element must use the "fluid" tag and "amount" tag to specify the fluid type and amount.  This uses the fluid dictionary</li>
<li><b>itemresults:</b> Item outputs go here.  Just like itemingredients, this is an array of items.</li>
<li><b>fluidresults:</b> Fluid outputs go here.  Just like fluidingredients, this is an array of objects containing "fluid" and "amount"</li>
<li><b>time:</b> Amount of time the recipe takes in ticks.  It is also number of seconds multiplied by 20.  If you want it to take 5 seconds, then time should be 100 because 100 ticks = 5seconds * 20 ticks per second.
<li><b>energy:</b> Amount of energy per tick this recipe consumes.  Total amount of energy is this tag multiplied by the number entered for time.</li>
</ul>
<hr style="border-width: 5px;">
<h3>NOTE: The below is being deprecated and will no longer be relevant for Advanced Rocketry versions targetting minecraft 1.13+</h3>
<p><b>In Advanced Rocketry 1.5.0+ for Minecraft 1.12, both the XML recipes and JSON recipes will be accepted.  Recipes added as a resource pack may be saved in XML.</b></p>
<p>This document will guide you through manually adding recipes to AR\'s various machines.<br />Each machine will generate a "MACHINENAME.xml" in the config/advancedRocketry folder with an empty set of "Recipes" tags.</p>


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
&#60;/Recipes&#62;</p></code></div>

';
    
    $infoBarContent = 'Advanced Rocketry Recipe configuration';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex1.12.php');
?>
