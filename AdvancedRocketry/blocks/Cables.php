<?php
    $title = 'Cables (Depracated)';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/energyCable_demo.jpg" /><h2>Energy Cable</h2><p>&nbsp;&nbsp;&nbsp;&nbsp; The energy cable provides a way to connect energy generators to energy consuming devices.</p>
    <p>The energy cable will automatically draw up to 1000 power per second from and Forge power compatible blocks and transfer the power to any Forge Compatible reciever block.</p>
    <p>Note: the 1.7.10 version requires a redstone signal on the energy source pipe and only works with RF capable blocks</p>
    <hr><h2>Data Cable</h2>
    <p>The data cable provides a way to transfer data between machines without requiring the data chip.</p>
    <p>The Data cable will pull 1 data/tick from a data source.  Data will only be pulled if the pipe is powered by redstone</p>
    <p>In addition, when pulling from the Satellite terminal will automatically pull directly from the satellite.</p>
    <hr><h2>Liquid Pipe</h2>
    <p>The liquid pipe can transmit liquid from a tank to any other tank at a 100 milibuckets/tick.  Like the other two pipes, the source pipe must be powered to pull liquid.</p>
    <hr>
    <h2>Depracation notice and motivation</h2>
    <h3>Buggy and Broken</h3>
    <p>As you may be aware, all of the Cables in Advanced Rocketry were marked as Depracated and the recipes removed in 1.3.x.  There\'s several reasons for this.  First, the pipes were only added during the port from 1.7 to 1.10 as a stopgap measure due to the fact many logisitics mods had not yet updated at the time.  
    Because it was a stopgap measure, the design and implementation was not very well
    thought out and was rather rushed.  Because of the design being rushed, a LOT of small annoying bugs existed with the system.  Pipes needing to be replaced periodically, random crashing, etc.  In order to once and for all fix all of these issues, the system would need to be significantly reworked.  The majority of the issues came from handling chunk loading and unloading.</p>
    <h3>Not a Logisitics mod</h3>
    <p>The second issue is that Advanced Rocketry, despite having a number of machines, is not really a logistics or machine mod, advanced rockety\'s primary focus is space travel.  there are many other mods out there dedicated to handling fluid flow and item flow.  Because I\'m one guy trying to balance a job, life, a minecraft mod, and a game engine to host future projects ( think advanced rocketry with actually round planets and being able to actually fly in space without loading screens ), I don\'t have time to focus on an "everything" mod.</p>
    <p>Since I know no other mods handle data, the <a href="WirelessTransciever.php">Wireless Transciever</a> was added to prevent loss of functionality.  While it is true the same can be done for fluids and items, I feel like that\'d go against the quasi-realistic, semi-near-term future that AR is meant to represent.</p>
    <h3>In Conclusion</h3>
    <p><bold>TL;DR:</bold> The pipes were buggy, meant to fix the lack of logisitics mods when 1.10 came out, and would be very time consuming for me to fix, and I have very limited time.  I think it better to have something that works all the time and is more limited, than something that works some of the time but has more options.</p>
    <p>Thank you all for understanding and for all the support on this project.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/energyCable_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: No<br />Sealable: No<br />Tile Entity: Yes<hr><center>Teir 1</center><br />Power Transfer: 1000/t';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
